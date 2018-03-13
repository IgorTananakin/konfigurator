<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Socket;

/* @var $this yii\web\View */
/* @var $model app\models\Coolingsystem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coolingsystem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'socket_id')->dropdownList(
    Socket::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'']) ?>

    <?= $form->field($model, 'power')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
