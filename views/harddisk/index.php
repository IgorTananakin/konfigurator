<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Harddisk;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>



<div class="col-md-9 ">
<?php foreach ($harddisk as $key => $harddisks): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $harddisks->id?>
        <h4>Жёсткий диск <?php echo $harddisks->title?></h4>
        
        <img src="/uploads/HarddiskController/<?=$harddisks->title?>.jpg" class="button12"alt="картинка жёсткого диска"/>

        <p class="text_property">Мощность <?php echo $harddisks->power;?> Вт</p>
                   
        <p class="price">Цена <?php echo $harddisks->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['harddisk/view','id'=>$harddisks->id]) ?>"class="btn btn-more">Подробнее</a>       
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Harddisk','id'=>$harddisks->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
