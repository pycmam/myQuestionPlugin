<?php
/**
 * Панель управления вопросом
 *
 * @param  Question $question
 */
?>

<div id="object_controls">
<ul>
    <li class="back-to-list section"><?php echo link_to('Вернуться в список', 'myQuestionAdmin'); ?></li>
    <li class="delete section"><?php echo link_to('Удалить', 'myQuestionAdmin_delete', $my_question, array('method' => 'delete', 'confirm' => 'Удалить вопрос?')); ?></li>
</ul>
</div>
