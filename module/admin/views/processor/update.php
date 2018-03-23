<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Processor */

$this->title = 'Изменить процессор: ';
$this->params['breadcrumbs'][] = ['label' => 'Процессоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="processor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
