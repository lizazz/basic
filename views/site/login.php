<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>
<h1>Авторизация</h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'username')->label('Ваш электронный адрес') ?>
    <?= $form->field($model, 'password')->label('Ваш пароль')->passwordInput() ?>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>