<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Powersupply */

$this->title = 'Создать блок питания';
$this->params['breadcrumbs'][] = ['label' => 'Блоки питания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="powersupply-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
