<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Videocard;
use app\components\MenuWidget;
?>


<?php echo MenuWidget::widget() ?>

<div class="col-md-9 ">
<?php foreach ($videocard as $key => $videocards): ?>

<?php ?>



    <div class="col-md-4">
    <?php if ($key % 3 == 0): ?>
    <div class="clearfix"></div>
<?php endif?>
<?php $videocards->id?>
        <h3>Видеокарта <?php echo $videocards->title?></h3>
      	<img src="../image/korpis7.jpg" class="button12"alt="картинка сборки"/>
        <h5>Характеристики</h5>
        <!-- добавить описание -->



        <!--             -->
        <a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Videocard','id'=>$videocards->id])?>"  class="btn btn-primary add-to-basket">В сборку</a>
    </div>
    
<?php endforeach ?>



</div>



</div> 
