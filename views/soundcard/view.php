<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Soundcard;
?>

<div class="col-md-4 ">
<h1>Звуковая карта <?=$soundcard->title?></h1>
<?=$soundcard->getImageUrl()?>
<p class="price">Цена <?php echo $soundcard->price;?> руб</p>

<a href="<?=\yii\helpers\Url::to(['soundcard/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Soundcard','id'=>$soundcard->id])?>"  class="btn btn-primary add-to-basket">В сборку</a></div>

<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Мощность: <small><?=$soundcard->power?></small>Вт</p>
</div>





