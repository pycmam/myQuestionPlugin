<?php

/**
 * PluginmyQuestion form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormFilterPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginmyQuestionFormFilter extends BasemyQuestionFormFilter
{
    public function setup()
    {
        parent::setup();

        $this->useFields(array('city', 'email', 'subj', 'created_at'));
    }
}
