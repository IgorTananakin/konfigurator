<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Networkcard;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($networkcard as $key => $networkcards): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $networkcards->id?>
        <h3>Сетевая карта <?php echo $networkcards->title?></h3>
      	<img src="../image/korpis7.jpg" class="button12"alt="картинка сборки"/>
        <h5>Характеристики</h5>
        <!-- добавить описание -->



        <!--             -->
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Networkcard','id'=>$networkcards->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
