<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Corpus */

$this->title = 'Создать корпус';
$this->params['breadcrumbs'][] = ['label' => 'Корпуса', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="corpus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
