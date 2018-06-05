<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Corpus;
?>

<div class="col-md-4 ">
<h1>Корпус <?=$corpus->title?></h1>
<?=$corpus->getImageUrl()?>
<p class="price">Цена <?php echo $corpus->price;?> руб</p>

<a href="<?=\yii\helpers\Url::to(['corpus/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Corpus','id'=>$corpus->id])?>"  class="btn btn-primary add-to-basket">В сборку</a></div>

<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Размер:<small><?=$corpus->size?></small>мм</p>
		<p class="text_complex">Мощность: <small><?=$corpus->power?></small>Вт</p>
</div>





