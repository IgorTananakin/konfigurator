<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Soundcard */

$this->title = 'Создать звуковую карту';
$this->params['breadcrumbs'][] = ['label' => 'Soundcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soundcard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
