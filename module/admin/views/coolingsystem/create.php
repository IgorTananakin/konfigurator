<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Coolingsystem */

$this->title = 'Создать кулер';
$this->params['breadcrumbs'][] = ['label' => 'Кулеры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coolingsystem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
