<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Harddisk */

$this->title = 'Создать жёсткий диск';
$this->params['breadcrumbs'][] = ['label' => 'Жёсткие диски', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="harddisk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
