<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Corpus;
use app\components\MenuWidget;
/* @var $this yii\web\View */
/* @var $model app\models\Assembly */
/* @var $form ActiveForm */
?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
      
            <?php foreach ($corpus as $key => $corpusa): ?>

                <div class="col-md-4">
                <?php if ($key % 3 == 0): ?>
                <div class="clearfix"></div>
            <?php endif?>
            <div class="thumbnail">
                <?php $corpusa->id?>
                <h4>Корпус <?php echo $corpusa->title?></h4>

                

                <?php if ($corpusa->image == ''): ?>
                    <img src="/uploads/фото отсутвует.jpg" />
                <?php else: ?>
                <img src="/uploads/CorpusController/thumbnail-200x200/<?=$corpusa->image?>" class="button12"alt="ошибка"/>
                <?php endif; ?>

              
                    <p class="text_property">Размер <?php echo $corpusa->size;?> мм</p>
                    <p class="text_property">Размер под жёсткий диск <?php echo $corpusa->size_hard_disc;?> мм</p>
                    <p class="text_property">Мощность <?php echo $corpusa->power;?> Вт</p>
                   
                    <p class="price">Цена <?php echo $corpusa->price;?> руб</p>
                    
                    <a href="<?=\yii\helpers\Url::to(['corpus/view','id'=>$corpusa->id]) ?>"class="btn btn-more">Подробнее</a>
                    <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Corpus','id'=>$corpusa->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
                </div>
                </div>
            <?php endforeach ?>



              
        </div>



</div> 
