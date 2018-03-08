<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ram-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'manufacturer') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'frequency') ?>

    <?php echo $form->field($model, 'sze') ?>

    <?php echo $form->field($model, 'power') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
