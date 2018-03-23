<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Socket;

/* @var $this yii\web\View */
/* @var $model app\models\Processor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="processor-form">

     <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

       <?= $form->field($model, 'socket_id')->dropdownList(
    Socket::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Socket']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'frequency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'digit_capacity')->textInput() ?>

    <?= $form->field($model, 'keh_memory')->textInput() ?>

    <?= $form->field($model, 'load')->textInput() ?>

    <?= $form->field($model, 'power')->textInput() ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
