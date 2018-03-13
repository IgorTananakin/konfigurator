<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Motherboard */

$this->title = 'Изменить материнскую плату: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Motherboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="motherboard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
