<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Processor;
?>

<div class="col-md-4 ">
<h1>Процессор <?=$processor->title?></h1>
<?=$processor->getImageUrl()?>
<p class="price">Цена <?php echo $processor->price;?> руб</p>

<a href="<?=\yii\helpers\Url::to(['processor/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Processor','id'=>$processor->id])?>"  class="btn btn-primary add-to-basket">В сборку</a></div>

<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Сокет:<small><?=$processor->socket->title?></small></p>
		<p class="text_complex">Частота: <small><?=$processor->frequency?></small></p>
        <p class="text_complex">Кеш память: <small><?=$processor->digit_capacity?></small></p>
        <p class="text_complex">Загрузка: <small><?=$processor->power?></small></p>
        <p class="text_complex">Мощность: <small><?=$processor->power?></small></p>
        <p class="text_complex">Максимальная температура: <small><?=$processor->power?></small></p>
        <p class="text_complex">Количество ядер: <small><?=$processor->power?></small></p>
</div>





