
<?php
use yii\helpers\Html;//вывод кнопки submitButton
use yii\widgets\ActiveForm;//отвечает за создание форм
?>
<h3>саламалеку ты попал на сборки</h3>
<?php $this->title = 'Изменить сборку: №' . $model->id; ?>

<?php $pucther=array(1,2,3,4,5,6);?>
<?php foreach($pucther as $pucthers)?>
<?php for ($i=1;$i>=6;$i++)?>

<?php {?> 
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>
<img src="image/korpis<?=$pucthers?>.jpg" class="button12"alt="картинка сборки"/>


<?php }?>









