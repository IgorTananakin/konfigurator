<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Videocard;
use app\components\MenuWidget;
?>


<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($videocard as $value => $videocards): ?>
<?php if($value % 3 == 0 ): ?>
		<div class="clear"> </div>
	<?php endif;?>


    <div class="col-md-4">

<?php $videocards->id?>
        <h4>Видеокарта <?php echo $videocards->title?></h4>


        <!-- вывод картинки метод в модели -->
        <?=$videocards->getImageUrl()?>



        <p class="text_property">Графическая схема <?php echo $videocards->graphical_scheme;?> </p>
        <p class="text_property">Видеоконтроллер <?php echo $videocards->video_controler;?> </p>
        <p class="text_property">Мощность <?php echo $videocards->power?> Вт</p>
                   
        <p class="price">Цена <?php echo $videocards->price;?> руб</p>
        
        <a href="<?=\yii\helpers\Url::to(['videocard/view','id'=>$videocards->id]) ?>"class="btn btn-more">Подробнее</a>
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Videocard','id'=>$videocards->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
