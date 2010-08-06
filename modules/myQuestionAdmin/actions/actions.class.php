<?php

require_once dirname(__FILE__).'/../lib/myQuestionAdminGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/myQuestionAdminGeneratorHelper.class.php';

/**
 * myQuestionAdmin actions.
 *
 * @package    eastbookingsystem
 * @subpackage myQuestionAdmin
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class myQuestionAdminActions extends autoMyQuestionAdminActions
{
    /**
     * Показать вопрос
     */
    public function executeShow()
    {
        $this->question = $this->getRoute()->getObject();
    }
}
