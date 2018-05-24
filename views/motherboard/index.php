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
        <h4>Материнская плата <?php echo $motherboards->title?></h4>


        <!-- вывод картинки метод в модели -->
        <?=$motherboards->getImageUrl()?>



        <p class="text_property">Графическая схема <?php echo $motherboards->graphical_scheme;?> </p>
        <p class="text_property">Количество PCI <?php echo $motherboards->pci_count;?> </p>
        <p class="text_property">Мощность <?php echo $motherboards->power;?> Вт</p>
                   
        <p class="price">Цена <?php echo $motherboards->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['motherboard/view','id'=>$motherboards->id]) ?>"class="btn btn-more">Подробнее</a>
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Motherboard','id'=>$motherboards->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
