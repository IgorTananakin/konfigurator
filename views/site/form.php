<?php
use yii\helpers\Html;//вывод кнопки submitButton
use yii\widgets\ActiveForm;//отвечает за создание форм
?>
<? if ($name) {?><p>Вы ввели имя <b><?=$name?></b> и email <b><?= $email?></b></p><?}?>

<?php $f=ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]);?>

<?=$f->field($form,'name')?>
<?=$f->field($form,'email')?>
<?=$f->field($form,'file')->fileInput()?>
<?=Html::submitButton('Отправить');?>
<?php ActiveForm::end();?>