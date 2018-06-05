<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Corpus;
?>

<div class="col-md-4 ">
<h1>Оперативная память <?=$ram->title?></h1>
<?=$ram->getImageUrl()?>
<p class="price">Цена <?php echo $ram->price;?> руб</p>

<a href="<?=\yii\helpers\Url::to(['ram/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Ram','id'=>$ram->id])?>"  class="btn btn-primary add-to-basket">В сборку</a></div>

<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Производитель:<small><?=$ram->manufacturer?></small>мм</p>
		<p class="text_complex">Частота: <small><?=$ram->frequency?></small></p>
        <p class="text_complex">Размер: <small><?=$ram->sze?></small></p>
        <p class="text_complex">Мощность: <small><?=$ram->power?></small></p>
        <p class="text_complex">Память: <small><?=$ram->memory_id?></small></p>
        


</div>





