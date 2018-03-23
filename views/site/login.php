<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php
$form=ActiveForm::begin(['class'=>'form-horizontal']);
?>
<h1>Авторизация</h1>
<?=$form->field($login_model,'email')->textInput(['autofocus'=>true])?>

<?=$form->field($login_model,'password')->passwordInput()?>


<div>
<button type="submit" class="btn btn-primary">Авторизоваться</button>
</div>
<?php
$form=ActiveForm::end();


?>

