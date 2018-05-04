<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Powersupply;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($powersupply as $key => $powersupplies): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $powersupplies->id?>
        <h4>Блок питания <?php echo $powersupplies->title?></h4>
        <img src="/uploads/PowersupplyController/<?=$powersupplies->title?>.jpg" class="button12"alt="картинка блока питания"/>
                    
        <p class="text_property">Мощность <?php echo $powersupplies->power;?> Вт</p>
                   
        <p class="price">Цена <?php echo $powersupplies->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['powersupply/view','id'=>$powersupplies->id]) ?>"class="btn btn-more">Подробнее</a>        
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Powersupply','id'=>$powersupplies->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>   
<?php endforeach ?>



</div>



</div> 
