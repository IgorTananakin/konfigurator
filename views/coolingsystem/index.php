<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Coolingsystem;
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
    <li><a href="<?=\yii\helpers\Url::to(['corpus/index'])?>">Корпус</a></li>
    <li><a href="<?=\yii\helpers\Url::to(['processor/index'])?>">Процессор</a></li>
    <li><a href="#<?=\yii\helpers\Url::to(['coolingsystem/index'])?>">Материнская плата</a></li>
    <li><a href="#">Оперативная память</a></li>
    <li><a href="#">Жёсткие диски</a></li>
    <li><a href="#">Звуковая карта</a></li>
    <li><a href="#">Видео карта</a></li>
    <li><a href="#">Сетевая карта</a></li>
    <li><a href="#">CD/DVD привод</a></li>
    <li><a href="#">Кулер</a></li>
    <li><a href="#"></a></li>

  </ul>
</nav>
</div>

<div class="col-md-9 ">
<?php foreach ($coolingsystem as $key => $coolingsystems): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $coolingsystems->id?>
        <h3>Корпус <?php echo $coolingsystems->title?></h3>
      	<img src="../image/korpis7.jpg" class="button12"alt="картинка сборки"/>
        <h5>Характеристики</h5>
        <!-- добавить описание -->



        <!--             -->
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Сoolingsystem','id'=>$coolingsystems->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
