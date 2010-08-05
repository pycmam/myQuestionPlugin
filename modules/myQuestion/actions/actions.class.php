<?php

/**
 * Задать вопрос
 */
class myQuestionActions extends sfActions
{
    /**
     * Показать форму вопроса
     */
    public function executeNew()
    {
        if (! isset($this->defaults)) {
            $this->defaults = array();
        }

        $this->defaults = array_merge($this->defaults, $this->getDefaults());

        $question = new myQuestion();
        $question->fromArray($this->defaults);

        $this->form = new myQuestionForm($question);
    }

    /**
     * Обработка отправки формы
     */
    public function executeCreate(sfWebRequest $request)
    {
        $this->executeNew();

        if ($request->isMethod('post')) {
            $this->form->bind($request->getParameter($this->form->getName()));

            if ($this->form->isValid()) {
                $question = $this->form->save();

                // админу
                $this->getMailer()->sendTemplate('question.mail', null, $vars = array(
                    'name' => $question->getName(),
                    'phone' => $question->getPhone(),
                    'email' => $from = $question->getEmail(),
                    'subject' => $question->getSubj(),
                    'question' => $question->getQuestion(),
                ), sfConfig::get('app_mail_admin_email'), $from, $from);

                // копия
                if ($ccUser = $question->getCc()) {
                    $ccUser->getProfile()->sendMailTemplate('question.mail', $vars, $from, $from);
                }

                $this->setTemplate('done');
            } else {

                if ($request->isXmlHttpRequest()) {
                    return $this->renderPartial('myQuestion/form', array('form' => $this->form));
                }

                $this->setTemplate('new');
            }
        }
    }


    /**
     * Значение по-умолчанию
     *
     * @return array
     */
    protected function getDefaults()
    {
        $defaults = array();

        if ($this->getUser()->isAuthenticated()) {
            $profile = $this->getUser()->getGuardUser()->getProfile();

            $defaults['name'] = $profile->getName();
            $defaults['email'] = $profile->getEmail();
        }

        return $defaults;
    }
}
