<?php

/* @var $this yii\web\View */
use app\models\Assembly;
?>
<div class="col-md-4 ">
<h1>Сборка <?=$assembly->title?></h1>
<?=$assembly->getImageUrl()?>
<p class="price">Цена <?php echo $assembly->getSum();?> руб</p>

<a href="<?=\yii\helpers\Url::to(['site/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['basket/add','id'=>$assembly->id])?>" data-id="<?=$assembly->id?>" class="btn btn-primary add-to-basket">В корзину</a>
</div>
<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Процессор:<small><?=$assembly->processor->title;?></small></p>
		<p class="text_complex">Оперативная память: <small><?=$assembly->ram->title?></small></p>
		<p class="text_complex">Материнская плата: <small><?=$assembly->motherboard->title?></small></p>
		<p class="text_complex">Видео карта: <small><?=$assembly->videocard->title?></small></p>
        <p class="text_complex">Жёсткий диск: <small><?=$assembly->harddisc->title?></small></p>
        <p class="text_complex">Сетевая карта: <small><?=$assembly->networkcard->title?></small></p>
        <p class="text_complex">Звуковая карта: <small><?=$assembly->soundCard->title?></small></p>
        <p class="text_complex">Блок питания: <small><?=$assembly->powersupply->title?></small></p>
        <p class="text_complex">Кулер: <small><?=$assembly->coolingsystem->title?></small></p>
        <p class="text_complex">CD/DVD привод: <small><?=$assembly->driver->title?></small></p>
        <p class="text_complex">Корпус: <small><?=$assembly->corpus->title?></small></p>

</div>

