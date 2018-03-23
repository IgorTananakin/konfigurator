<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model app\models\Assembly */
/* @var $form ActiveForm */
?>





<div class="container-fluid">
	<div class="row">
		
<?php foreach ($assemblys as $assembly): ?>
<div class="assembly">
<div class="col-md-3">
    <h4 class="Name_sborka">Сборка <?=$assembly->id?></h4>
	<!-- <img src="uploads/CorpusController/<?//=$model->image?>.jpg" class="button12"alt="картинка сборки"/> -->
	
	<!-- <img src="<?//=$model->getImageUrl()?>" alt="картинка сборки"/> -->
	<?$cost=0;?>
	<img src="/uploads/CorpusController/korpis1.jpg" class="button12"alt="картинка сборки"/>
		<p class="text-primary">Процессор:<small><?=$assembly->processor->title;?></small></p>
		<?//$cost=$assembly->processor->price;?>
		<p class="text-primary">Оперативная память: <small><?=$assembly->ram->title?></small></p>
		<?$cost=$assembly->ram->price?>
		<p class="text-primary">Материнская плата: <small><?=$assembly->motherboard->title?></small></p>
		<?$cost=$assembly->motherboard->price+$cost?>
		<p class="text-primary">Видео карта: <small><?=$assembly->videocard->title?></small></p>
		<?$cost=$assembly->videocard->price+$cost?>
		<p class="text-danger">Цена <?//=$cost;?></p>
		<button type="button" class="btn btn-more ">Подробнее</button>
		<button type="submit" class="btn btn-primary">В корзину</button>



		
</div>


<?php endforeach ?>
	</div>
	</div>
</div>