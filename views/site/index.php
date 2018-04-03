<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Assembly;
/* @var $this yii\web\View */
/* @var $model app\models\Assembly */
/* @var $form ActiveForm */
?>



<?$cost=0;?>
<?$sum=0?>

<div class="container-fluid">
	<div class="row">
		
<?php foreach ($assemblys as $assembly): ?>

<div class="assembly">
<div class="col-md-3">
    <h4 class="Name_sborka">Сборка <?=$assembly->id?></h4>

	

	
	<img src="/uploads/CorpusController/korpis1.jpg" class="button12"alt="картинка сборки"/>
		<p class="text-primary">Процессор:<small><?=$assembly->processor->title;?></small></p>
		
		
		
		
		<p class="text-primary">Оперативная память: <small><?=$assembly->ram->title?></small></p>
		


		<p class="text-primary">Материнская плата: <small><?=$assembly->motherboard->title?></small></p>
	
		<p class="text-primary">Видео карта: <small><?=$assembly->videocard->title?></small></p>
		<?php $sum = new Assembly();?>
		<p class="text-danger">Цена <?php echo $sum->getSum($assembly);?></p>
		<a href="<?=\yii\helpers\Url::to(['assembly/view','id'=>$assembly->id])?>"class="btn btn-more">Подробнее</a>
		
		<a href="<?=\yii\helpers\Url::to(['basket/add','id'=>$assembly->id])?>" data-id="<?=$assembly->id?>" class="btn btn-primary add-to-basket">В корзину</a>


		
</div>


<?php endforeach ?>
	</div>
	</div>
</div>