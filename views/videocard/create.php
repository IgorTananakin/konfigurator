<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Videocard */

$this->title = 'Create Videocard';
$this->params['breadcrumbs'][] = ['label' => 'Videocards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videocard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
