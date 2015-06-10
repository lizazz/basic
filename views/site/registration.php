<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>
<h1>Регистрация</h1>
<?=$model->warning;?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Ваше имя') ?>

    <?= $form->field($model, 'email')->label('Ваш электронный адрес') ?>
    <?= $form->field($model, 'password')->label('Ваш пароль')->passwordInput() ?>
    <?= $form->field($model, 'captcha')->widget(Captcha::classname(), [
    // configure additional widget properties here
])->label('Введите текст из картинки (клик на картинке для смены)') ?>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>