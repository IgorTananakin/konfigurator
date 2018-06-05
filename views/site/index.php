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



	<?php foreach ($assemblys as $value => $assembly): ?>
	<?php if($value % 4 == 0 ): ?>
		<div class="clear"> </div>
	<?php endif;?>

			<div class="col-md-3">
			
				<div class="thumbnail">
					<h4 class="Name_sborka"><?=$assembly->title?></h4>
					
					<?php if ($assembly->corpus->image == ''): ?>
                    <img src="/uploads/фото отсутвует.jpg" />
                	<?php else: ?>
                	<img src="/uploads/CorpusController/thumbnail-200x200/<?=$assembly->corpus->image?>" class="button12"alt="ошибка"/>
                	<?php endif; ?>


					<p class="text_property">Процессор:<small><?=$assembly->processor->title;?></small></p>
					<p class="text_property">Оперативная память: <small><?=$assembly->ram->title?></small></p>	
					<p class="text_property">Материнская плата: <small><?=$assembly->motherboard->title?></small></p>
					<p class="text_property">Видео карта: <small><?=$assembly->videocard->title?></small></p>
						
					<?php// $sum = new Assembly();?>
					<p class="price">Цена <?php echo $assembly->getSum();?> руб</p>

					<a href="<?=\yii\helpers\Url::to(['assembly/view','id'=>$assembly->id])?>"class="btn btn-more">Подробнее</a>
						
					<a href="<?=\yii\helpers\Url::to(['basket/add','id'=>$assembly->id])?>" data-id="<?=$assembly->id?>" class="btn btn-primary add-to-basket">В корзину</a>

				</div>

			</div>
		
	<?php endforeach ?>

		
	</div>
</div>