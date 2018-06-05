<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Powersupply;
?>

<div class="col-md-4 ">
<h1>Блок питания <?=$powersupply->title?></h1>
<?=$powersupply->getImageUrl()?>
<p class="price">Цена <?php echo $powersupply->price;?> руб</p>

<a href="<?=\yii\helpers\Url::to(['powersupply/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Powersupply','id'=>$powersupply->id])?>"  class="btn btn-primary add-to-basket">В сборку</a></div>

<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Размер:<small><?=$powersupply->size?></small>мм</p>
		<p class="text_complex">Мощность: <small><?=$powersupply->power?></small>Вт</p>
</div>





