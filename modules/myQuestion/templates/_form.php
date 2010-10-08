<?php use_helper('jQuery') ?>

<?php echo jq_form_remote_tag(array('url' => 'myQuestion', 'update' => 'question-form'), array('class' => 'question-form')) ?>
    <ul class="form">
        <?php echo $form ?>
        <li class="form-row">
            <input id="question-submit" type="submit" value="<?php echo __('Submit') ?>" />
        </li>
    </ul>
</form>
