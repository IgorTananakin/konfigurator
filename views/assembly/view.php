<?php
/* @var $this yii\web\View */
?>
<h1>Сборка №<?=$assembly->id?></h1>
<img src="/uploads/CorpusController/korpis1.jpg" class="button12"alt="картинка сборки"/>
		<p class="text-primary">Процессор:<small><?=$assembly->processor->title;?></small></p>
		<p class="text-primary">Оперативная память: <small><?=$assembly->ram->title?></small></p>
		<p class="text-primary">Материнская плата: <small><?=$assembly->motherboard->title?></small></p>
		<p class="text-primary">Видео карта: <small><?=$assembly->videocard->title?></small></p>
        <p class="text-primary">Жёсткий диск: <small><?//=$assembly->hardDisk->title?></small></p>
        <p class="text-primary">Сетевая карта: <small><?=$assembly->networkcard->title?></small></p>
        <p class="text-primary">Звуковая карта: <small><?=$assembly->soundCard->title?></small></p>
        <p class="text-primary">Блок питания: <small><?=$assembly->powersupply->title?></small></p>
        <p class="text-primary">Кулер: <small><?=$assembly->colingsystem->title?></small></p>
        <p class="text-primary">CD/DVD привод: <small><?=$assembly->driver->title?></small></p>
        <p class="text-primary">Корпус: <small><?=$assembly->corpus->title?></small></p>
		<p class="text-danger">Цена <?//=$cost;?></p>

		<a href="<?=\yii\helpers\Url::to(['site/index'])?>"class="btn btn-more">Назад</a>
		<button type="submit" class="btn btn-primary">В корзину</button>


