<div class="col-md-3 ">
<nav class="configurator_menu">
<h3>Меню для подбора комплектующих</h3>
<p class="text-danger">Цена от</p>
<p class="text-danger">Цена до</p>
  <ul class="nav">
    <li><a href="<?=\yii\helpers\Url::to(['corpus/index'])?>">Корпус</a></li>
    <li><a href="<?=\yii\helpers\Url::to(['processor/index'])?>">Процессор</a></li>
    <li><a href="<?=\yii\helpers\Url::to(['coolingsystem/index'])?>">Материнская плата</a></li>
    <li><a href="#">Оперативная память</a></li>
    <li><a href="#">Жёсткие диски</a></li>
    <li><a href="#">Звуковая карта</a></li>
    <li><a href="#">Видео карта</a></li>
    <li><a href="#">Сетевая карта</a></li>
    <li><a href="#">CD/DVD привод</a></li>
    <li><a href="#"></a></li>

  </ul>
</nav>
</div>
<div class="col-md-9 ">


<?php foreach ($processor as $key => $processors): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $processors->id?>
        <h3>Процессор <?php echo $processors->title?></h3>
      	<img src="../image/processor.jpg" class="button12"alt="картинка сборки"/>
        <h5>Характеристики</h5>
        <!-- <p class="text-primary">Сокет <?// echo $processors->?></p> -->
        <p class="text-primary">Разрядность <?php echo $processors->digit_capacity?></p>
        <p class="text-primary">Частота <?php echo $processors->frequency?></p>
        <p class="text-primary">Кеш-память <?php echo $processors->keh_memory?></p>
        <p class="text-primary">Мощность <?php echo $processors->power;?></p>
		    <p class="text-danger">Цена <?php echo $processors->price;?> руб</p>
        <a href="<?=\yii\helpers\Url::to(['processor/view','id'=>$processors->id]) ?>"class="btn btn-more">Подробнее</a>
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Processor','id'=>$processors->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
        
    </div>
    
<?php endforeach ?>

</div>