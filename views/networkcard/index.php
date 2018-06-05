<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Networkcard;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($networkcard as $value => $networkcards): ?>
<?php if($value % 4 == 0 ): ?>
		<div class="clear"> </div>
	<?php endif;?>


    <div class="col-md-4">


<?php $networkcards->id?>
        <h4>Сетевая карта <?php echo $networkcards->title?></h4>



        <!-- вывод картинки метод в модели -->
        <?=$networkcards->getImageUrl()?>



                    
        <p class="text_property">Мощность <?php echo $networkcards->power;?> Вт</p>
                   
        <p class="price">Цена <?php echo $networkcards->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['networkcard/view','id'=>$networkcards->id]) ?>"class="btn btn-more">Подробнее</a>    
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Networkcard','id'=>$networkcards->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
