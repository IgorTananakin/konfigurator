<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Assembly */
/* @var $form ActiveForm */
?>
<div class="site-index">
<?php foreach ($assemblys as $assembly): ?>

	<p><?=Html::encode($assembly->id)?></p>
    <h4 class="Name_sborka">Сборка <?=$assembly->id?></h4>
	<!-- <img src="uploads/CorpusController/<?//=$model->image?>.jpg" class="button12"alt="картинка сборки"/> -->
	<!-- <div class="komplects"> -->

	
		<p class="text-primary">Процессор <?=$assembly->processor_id?></p>
		<p class="text-primary">Оперативная память <?=$assembly->id?></p>
		<p class="text-primary">Жёский диск <?=$assembly->id?></p>
		<p class="text-primary">Корпус <?=$assembly->id?></p>
        <!-- </div> -->

<?php endforeach ?>

</div><!-- site-index -->
