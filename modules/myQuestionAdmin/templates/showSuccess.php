<?php
/**
 * Подпробности вопроса
 *
 * @param myQuestion $question
 */
?>

<?php use_helper('Date') ?>

<div id="sf_admin_container">
    <h1>Вопрос на тему "<?php echo $question->getSubj() ?>"</h1>

    <div id="sf_admin_header">
        <?php include_partial('controls', array('my_question' => $question)); ?>
    </div>

    <div id="sf_admin_content">
        <div class="column_left">
            <div class="column">
                <h2>Информация</h2>
                <div class="row">
                    <strong class="label">Дата отправки:</strong>
                    <p class="content"><?php echo format_date($question->getCreatedAt()) ?></p>
                </div>

                <?php if ($question->getCcId() && $profile = $question->getCc()->getProfile()): ?>
                <div class="row">
                    <strong class="label">Копия:</strong>
                    <p class="content"><?php echo link_to(sprintf('%s (%s)', $profile->getName(), $profile->getEmail()), 'partner_show', $question->getCc()) ?></p>
                </div>
                <?php endif ?>
            </div>

            <div class="column">
                <h2>Отправитель</h2>
                <div class="row">
                    <strong class="label">Имя:</strong>
                    <p class="content"><?php echo $question->getName() ?></p>
                </div>
                <div class="row">
                    <strong class="label">E-mail:</strong>
                    <p class="content"><?php echo $question->getEmail() ?></p>
                </div>
                <div class="row">
                    <strong class="label">Телефон:</strong>
                    <p class="content"><?php echo $question->getPhone() ?></p>
                </div>
            </div>
        </div>

        <div class="column_right">
            <div class="column">
                <h2>Вопрос</h2>
                <div class="row">
                    <?php echo nl2br($question->getQuestion()) ?>
                </div>
            </div>
        </div>
    </div>

</div>