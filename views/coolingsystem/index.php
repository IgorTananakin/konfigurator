<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Coolingsystem;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($coolingsystem as $key => $coolingsystems): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $coolingsystems->id?>

        <h4>Кулер <?php echo $coolingsystems->title?></h4>

         <?php if ($coolingsystems->image == ''): ?>
        <img src="/uploads/фото отсутвует.jpg" />
        <?php else: ?>
        <img src="/uploads/CoolingsystemController/thumbnail-200x200/<?=$coolingsystems->image?>" class="button12"alt="ошибка"/>
        <?php endif; ?>


        <p class="text_property">Мощность <?php echo $coolingsystems->power;?> Вт</p>
                   
        <p class="price">Цена <?php echo $coolingsystems->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['coolingsystem/view','id'=>$coolingsystems->id]) ?>"class="btn btn-more">Подробнее</a>
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Coolingsystem','id'=>$coolingsystems->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
