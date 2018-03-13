<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Soundcard */

$this->title = 'Изменить звуковую карту: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Soundcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="soundcard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
