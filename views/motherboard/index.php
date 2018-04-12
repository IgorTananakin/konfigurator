<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Motherboard;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>





<div class="col-md-9 ">
<?php foreach ($motherboard as $key => $motherboards): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $motherboards->id?>
        <h3>Материнская плата <?php echo $motherboards->title?></h3>
      	<img src="../image/korpis7.jpg" class="button12"alt="картинка сборки"/>
        <h5>Характеристики</h5>
        <!-- добавить описание -->



        <!--             -->
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Motherboard','id'=>$motherboards->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
