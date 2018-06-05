<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Coolingsystem;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($coolingsystem as $value => $coolingsystems): ?>
<?php if($value % 3 == 0 ): ?>
		<div class="clear"> </div>
	<?php endif;?>



    <div class="col-md-4">
<?php $coolingsystems->id?>

        <h4>Кулер <?php echo $coolingsystems->title?></h4>

        <!-- вывод картинки метод в модели -->
        <?=$coolingsystems->getImageUrl()?>


        <p class="text_property">Мощность <?php echo $coolingsystems->power;?> Вт</p>
                   
        <p class="price">Цена <?php echo $coolingsystems->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['coolingsystem/view','id'=>$coolingsystems->id]) ?>"class="btn btn-more">Подробнее</a>
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Coolingsystem','id'=>$coolingsystems->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
