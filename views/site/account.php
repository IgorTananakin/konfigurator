<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Assembly;
/* @var $this yii\web\View */
/* @var $model app\models\Assembly */
/* @var $form ActiveForm */
?>

<div>
<h1>Личный кабинет</h1>
<?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]); ?>

<?=$form->field($account,'username')->textInput()?>

<?=$form->field($account,'surname')->textInput()?>

<?=$form->field($account,'patronymic')->textInput()?>

<?=$form->field($account,'email')->textInput()?>

<?=$form->field($account,'phone')->textInput()?>




<div>
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
<?php $form=ActiveForm::end(); ?>