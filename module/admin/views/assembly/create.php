<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Assembly */

$this->title = 'Создать сборку';
$this->params['breadcrumbs'][] = ['label' => 'Сборки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assembly-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
