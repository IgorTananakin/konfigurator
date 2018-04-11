<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Ram;
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
    <li><a href="#">Материнская плата</a></li>
    <li><a href="<?=\yii\helpers\Url::to(['ram/index'])?>">Оперативная память <?php if(isset($_SESSION['assembly']['Ram'])){ echo $_SESSION['assembly']['Ram']['title'];}?></a></li>
    <li><a href="<?=\yii\helpers\Url::to(['harddisk/index'])?>">Жёсткие диски</a></li>
    <li><a href="#">Звуковая карта</a></li>
    <li><a href="#">Видео карта</a></li>
    <li><a href="#">Сетевая карта</a></li>
    <li><a href="#">CD/DVD привод</a></li>
    <li><a href="<?=\yii\helpers\Url::to(['coolingsystem/index'])?>">Кулер</a></li>
    <li><a href="#">Блок питания</a></li>


  </ul>
</nav>
</div>

<div class="col-md-9 ">
<?php foreach ($ram as $key => $rams): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $rams->id?>
        <h3>Корпус <?php echo $rams->title?></h3>
      	<img src="../image/korpis7.jpg" class="button12"alt="картинка сборки"/>
        <h5>Характеристики</h5>
        <!-- добавить описание -->



        <!--             -->
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Ram','id'=>$rams->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
