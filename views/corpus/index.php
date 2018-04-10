<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Corpus;
/* @var $this yii\web\View */
/* @var $model app\models\Assembly */
/* @var $form ActiveForm */
?>



<div class="col-md-3 ">
<nav class="configurator_menu">
<h3>Меню для подбора комплектующих</h3>
<p class="text-danger">Цена от</p>
<p class="text-danger">Цена до</p>
  <ul class="nav">
    <li><a href="<?=\yii\helpers\Url::to(['processsor/index'])?>">Процессор</a></li>
    <li><a href="#">Материнская плата</a></li>
    <li><a href="#">Оперативная память</a></li>
    <li><a href="#">Жёсткие диски</a></li>
    <li><a href="<?=\yii\helpers\Url::to(['corpus/index'])?>">Корпус</a></li>
    <li><a href="#">Звуковая карта</a></li>
    <li><a href="#">Видео карта</a></li>
    <li><a href="#">Сетевая карта</a></li>
    <li><a href="#">CD/DVD привод</a></li>
    <li><a href="#"></a></li>

  </ul>
</nav>
</div>

<div class="col-md-9 ">
<?php foreach ($corpus as $key => $corpusa): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
        <h3>Корпус <?php echo $corpusa->title?></h3>
      	<img src="image/korpis7.jpg" class="button12"alt="картинка сборки"/>
        <h5>Характеристики</h5>
        <p class="text-primary">Размер <?php echo $corpusa->size;?></p>
        <p class="text-primary">Размер под жёсткий диск <?php echo $corpusa->size_hard_disc;?></p>
        <p class="text-primary">Мощность <?php echo $corpusa->power;?></p>
		    <p class="text-danger">Цена <?php echo $corpusa->price;?> руб</p>
        <a href="<?=\yii\helpers\Url::to(['corpus/view'])?>"class="btn btn-more">Подробнее</a>
        <a href="<?//=\yii\helpers\Url::to(['basket/add','id'=>$assembly->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> -->
