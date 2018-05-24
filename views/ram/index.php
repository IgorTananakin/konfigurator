<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Ram;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($ram as $key => $rams): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $rams->id?>
        <h4>Оперативная память <?php echo $rams->title?></h4>


        <!-- вывод картинки метод в модели -->
        <?=$rams->getImageUrl()?>



        <p class="text_property">Производитель <?php echo $rams->manufacturer;?> мм</p>
        <p class="text_property">Частота <?php echo $rams->frequency;?> мм</p>
        <p class="text_property">Мощность <?php echo $rams->power;?> Вт</p>
                   
        <p class="price">Цена <?php echo $rams->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['ram/view','id'=>$rams->id]) ?>"class="btn btn-more">Подробнее</a>
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Ram','id'=>$rams->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
