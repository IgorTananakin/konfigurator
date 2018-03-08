<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Ram;
use app\models\Soundcard;
use app\models\Motherboard;
use app\models\Processor;
use app\models\Corpus;
use app\models\Driver;
use app\models\Videocard;
use app\models\Networkcard;
use app\models\Harddisk;
use app\models\Powersupply;
use app\models\Coolingsystem;

/* @var $this yii\web\View */
/* @var $model app\models\Assembly */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assembly-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sound_card_id')->dropdownList(
    Soundcard::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select sound_card'])  ?>

    <?= $form->field($model, 'video_card_id')->dropdownList(
    Videocard::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Videocard']) ?>

    <?= $form->field($model, 'ram_id')->dropdownList(
    Ram::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Ram']) ?>

    <?= $form->field($model, 'processor_id')->dropdownList(
    Processor::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Processor']) ?>

    <?= $form->field($model, 'hard_disc_id')->dropdownList(
    Harddisk::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Harddisk']) ?>

    <?= $form->field($model, 'driver_id')->dropdownList(
    Driver::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Driver']) ?>

    <?= $form->field($model, 'motherboard_id')->dropdownList(
    Motherboard::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Motherboard']) ?>

    <?= $form->field($model, 'power_supply_id')->dropdownList(
    Powersupply::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Powersupply']) ?>

    <?= $form->field($model, 'cooling_system_id')->dropdownList(
    Coolingsystem::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Coolingsystem']) ?>

    <?= $form->field($model, 'corpus_id')->dropdownList(
    Corpus::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Corpus']) ?>

    <?= $form->field($model, 'network_card_id')->dropdownList(
    Networkcard::find()->select(['title', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Networkcard']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
