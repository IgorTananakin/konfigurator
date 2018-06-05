<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Networkcard;
?>

<div class="col-md-4 ">
<h1>Сетевая карта <?=$networkcards->title?></h1>
<?=$networkcards->getImageUrl()?>
<p class="price">Цена <?php echo $networkcards->price;?> руб</p>

<a href="<?=\yii\helpers\Url::to(['networkcard/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Networkcard','id'=>$networkcards->id])?>"  class="btn btn-primary add-to-basket">В сборку</a></div>

<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Скорость передачи данных:<small><?=$networkcards->data_transfer_speed?></small></p>
        <p class="text_complex">Поддержка операционных систем: <small><?=$networkcards->support_os?></small></p>
        <p class="text_complex">Мощность: <small><?=$networkcards->power?></small></p>
</div>





