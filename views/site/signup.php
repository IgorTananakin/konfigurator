<h1>Регистрация</h1>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(['class'=>'form-horizontal']);?>

<?=$form->field($model,'username')->textInput();?>

<?=$form->field($model,'surname')->textInput()?>

<?=$form->field($model,'patronymic')->textInput()?>

<?=$form->field($model,'email')->textInput(['autofocus'=>true])?>

<?=$form->field($model,'password')->passwordInput()?>

<?=$form->field($model,'phone')->textInput()?>
<h2>Адресс доставки</h2>
<?=$form->field($model,'adress')->textInput()?>
<?=$form->field($model, 'movie_b')->checkbox()?>

<div>
<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</div>

<?php $form = ActiveForm::end();?>