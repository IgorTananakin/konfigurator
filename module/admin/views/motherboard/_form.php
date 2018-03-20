<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Socket;

/* @var $this yii\web\View */
/* @var $model app\models\Motherboard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="motherboard-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sound')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pci_count')->textInput() ?>

    <?= $form->field($model, 'ide_count')->textInput() ?>

    <?= $form->field($model, 'graphical_scheme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'socket_id')->dropdownList(
    Socket::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Socket']) ?>

    <?= $form->field($model, 'power')->textInput() ?>

     <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
