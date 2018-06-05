<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Driver;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($driver as $value => $drivers): ?>
<?php if($value % 3 == 0 ): ?>
		<div class="clear"> </div>
	<?php endif;?>



    <div class="col-md-4">

<?php $drivers->id?>
        <h4>CD/DVD привод <?php echo $drivers->title?></h4>

        <!-- вывод картинки метод в модели -->
        <?=$drivers->getImageUrl()?>
        



        <p class="text_property">Размер <?php echo $drivers->size;?> мм</p>
        <p class="text_property">Мощность <?php echo $drivers->power;?> Вт</p>
                   
        <p class="price">Цена <?php echo $drivers->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['driver/view','id'=>$drivers->id]) ?>"class="btn btn-more">Подробнее</a>      
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Driver','id'=>$drivers->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
