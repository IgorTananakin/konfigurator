<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Soundcard;
use app\components\MenuWidget; ?>

<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($soundcard as $value => $soundcards): ?>
<?php if($value % 3 == 0 ): ?>
		<div class="clear"> </div>
	<?php endif;?>



    <div class="col-md-4">
    
<?php $soundcards->id?>
        <h4>Звуковая карта <?php echo $soundcards->title?></h4>


        <!-- вывод картинки метод в модели -->
        <?=$soundcards->getImageUrl()?>


                    <p class="text_property">Мощность <?php echo $soundcards->power;?> Вт</p>
                   
                    <p class="price">Цена <?php echo $soundcards->price;?> руб</p>
                    
        <a href="<?=\yii\helpers\Url::to(['soundcard/view','id'=>$soundcards->id]) ?>"class="btn btn-more">Подробнее</a>
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Soundcard','id'=>$soundcards->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
