<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Corpus */

$this->title = 'Update Corpus: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Corpuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="corpus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
