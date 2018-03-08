
<?php
use yii\helpers\Html;//вывод кнопки submitButton
use yii\widgets\ActiveForm;//отвечает за создание форм
?>
<h3>саламалеку ты попал на сборки</h3>


<?php $pucther=array(1,2,3,4,5,6);?>
<?php foreach($pucther as $pucthers)?>
<?php for ($i=1;$i<6;$i++)?>

<?php {?> 
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>


<?php }?>
<br><br><br><br><br><br><br>
<div class="sborka">
	<?php foreach($sborki as $sb)//выводить переменную представления по таблице сборки?>
	<? {?>
	<h4 class="Name_sborka">Сборка <?=$sb->id?></h4>
	<img src="image/korpis<?=$sb->id?>.jpg" class="button12"alt="картинка сборки"/>
	<div class="komplects">

	
		<p class="">Процессор <?=$sb->id?></p>
		<p class="text-primary">Оперативная память <?=$sb->id?></p>
		<p class="text-primary">Жёский диск <?=$sb->id?></p>
		<p class="text-primary">Корпус <?=$sb->id?></p>
	<?}?>

		
	</div>
	<p class="text-danger">Цена </p>
	<button type="submit" class="btn btn-primary">В корзину</button>
</div>

<?php foreach ($sborki as $section)?>
<?{?>
	<p><?=Html::encode($section->text)?></p>
<?}?>


<div class="sborka">
	<?php foreach($sborki as $sb)//выводить переменную представления по таблице сборки?>
	<? {?>
	<h4 class="Name_sborka">Сборка <?=$sb->id?></h4>
	<img src="image/korpis<?=$sb->id?>.jpg" class="button12"alt="картинка сборки"/>
	<div class="komplects">

	
		<p class="">Процессор <?=$sb->id?></p>
		<p class="text-primary">Оперативная память <?=$sb->id?></p>
		<p class="text-primary">Жёский диск <?=$sb->id?></p>
		<p class="text-primary">Корпус <?=$sb->id?></p>
	<?}?>

		
	</div>
	<p class="text-danger">Цена </p>
	<button type="submit" class="btn btn-primary">В корзину</button>
</div>




