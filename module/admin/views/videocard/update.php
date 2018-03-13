<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Videocard */

$this->title = 'Изменить видеокарту: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Видеокарты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="videocard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
