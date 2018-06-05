<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Powersupply;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($powersupply as $value => $powersupplies): ?>
<?php if($value % 4 == 0 ): ?>
		<div class="clear"> </div>
	<?php endif;?>



    <div class="col-md-4">
 
<?php $powersupplies->id?>
        <h4>Блок питания <?php echo $powersupplies->title?></h4>



        <!-- вывод картинки метод в модели -->
        <?=$powersupplies->getImageUrl()?>


                    
        <p class="text_property">Мощность <?php echo $powersupplies->power;?> Вт</p>
                   
        <p class="price">Цена <?php echo $powersupplies->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['powersupply/view','id'=>$powersupplies->id]) ?>"class="btn btn-more">Подробнее</a>        
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Powersupply','id'=>$powersupplies->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>   
<?php endforeach ?>



</div>



</div> 
