<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Corpus;
?>
<h1>Корпус <?=$corpus->title?></h1>
<img src="/uploads/CorpusController/korpis1.jpg" class="button12"alt="картинка сборки"/>

		<p class="text-primary">Процессор:<small><?=$corpus->size;?></small></p>
		<p class="text-primary">Оперативная память: <small><?=$corpus->size_hard_disc?></small></p>
		<p class="text-primary">Материнская плата: <small><?=$corpus->power?></small></p>
        

		<a href="<?=\yii\helpers\Url::to(['corpus/index'])?>"class="btn btn-more">Назад</a>
		<a href="<?//=\yii\helpers\Url::to(['basket/add','id'=>$assembly->id])?>" data-id="<?//=$assembly->id?>" class="btn btn-primary add-to-basket">В корзину</a>


