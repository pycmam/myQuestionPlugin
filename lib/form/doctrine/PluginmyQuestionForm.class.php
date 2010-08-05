<?php

/**
 * PluginmyQuestion form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginmyQuestionForm extends BasemyQuestionForm
{
    public function setup()
    {
        parent::setup();

        $this->validatorSchema['email'] = new sfValidatorEmail();
        $this->validatorSchema['question']->setOption('min_length', 5);
        $this->validatorSchema['question']->setOption('max_length', 1024);

        $this->useFields(array('name', 'email', 'phone', 'subj', 'question'));
    }
}
