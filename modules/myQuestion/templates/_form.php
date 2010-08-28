<?php use_helper('jQuery') ?>

<?php if (isset($success) && $success): ?>
<div class="flash success"><?php echo __('flash: question send success')?></div>
<?php endif ?>

<?php echo jq_form_remote_tag(array('url' => '@myQuestion', 'update' => 'question-form'), array('class' => 'list question-form')) ?>
    <ul>
    <?php echo $form ?>
    <li><input id="question-submit" type="submit" value="<?php echo __('Submit') ?>" /></li>
    </ul>
</form>
