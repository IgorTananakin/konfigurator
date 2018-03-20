<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Motherboard */

$this->title = 'Создать материнскую плату';
$this->params['breadcrumbs'][] = ['label' => 'Материнские платы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motherboard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
