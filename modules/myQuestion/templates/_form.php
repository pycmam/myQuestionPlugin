<?php use_helper('jQuery') ?>

<?php echo jq_form_remote_tag(array('url' => '@question', 'update' => 'question-form'), array('class' => 'list question-form')) ?>
    <ul>
    <?php echo $form ?>
    <li><input id="question-submit" type="submit" value="<?php echo __('Submit') ?>" /></li>
    </ul>
</form>
