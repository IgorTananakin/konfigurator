<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Corpus;
?>

<div class="col-md-4 ">
<h1>Корпус <?=$harddisk->title?></h1>
<?=$harddisk->getImageUrl()?>
<p class="price">Цена <?php echo $harddisk->price;?> руб</p>

<a href="<?=\yii\helpers\Url::to(['harddisk/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Harddisk','id'=>$harddisk->id])?>"  class="btn btn-primary add-to-basket">В сборку</a></div>

<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Сокет:<small><?=$harddisk->socket_id?></small>мм</p>
		<p class="text_complex">Мощность: <small><?=$harddisk->power?></small>Вт</p>
</div>





