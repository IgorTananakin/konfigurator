<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Videocard */

$this->title = 'Создать видеокарту';
$this->params['breadcrumbs'][] = ['label' => 'Видеокарты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videocard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
