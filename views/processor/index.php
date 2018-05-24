<?php 
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">


<?php foreach ($processor as $key => $processors): ?>

<?php ?>



    <div class="col-md-4">
    <?php// if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php//endif?>
<?php $processors->id?>
        <h4>Процессор <?php echo $processors->title?></h4>


        <!-- вывод картинки метод в модели -->
        <?=$processors->getImageUrl()?>



        <p class="text_property">Разрядность <?php echo $processors->digit_capacity?></p>
        <p class="text_property">Частота <?php echo $processors->frequency?></p>
        <p class="text_property">Кеш-память <?php echo $processors->keh_memory?></p>
            
        <p class="price">Цена <?php echo $processors->price;?> руб</p>
        
        <a href="<?=\yii\helpers\Url::to(['processor/view','id'=>$processors->id]) ?>"class="btn btn-more">Подробнее</a>
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Processor','id'=>$processors->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
        
    </div>
    
<?php endforeach ?>

</div>