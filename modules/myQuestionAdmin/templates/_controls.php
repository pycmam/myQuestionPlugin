<?php
/**
 * Панель управления вопросом
 *
 * @param  Question $question
 */
?>

<div id="object_controls">
<ul>
    <li class="back-to-list section"><?php echo link_to('Вернуться в список', 'my_question_admin'); ?></li>
    <li class="delete section"><?php echo link_to('Удалить', 'my_question_admin_delete', $my_question, array('method' => 'delete', 'confirm' => 'Удалить вопрос?')); ?></li>
</ul>
</div>
