<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Videocard;
?>

<div class="col-md-4 ">
<h1>Видеокарта <?=$videocard->title?></h1>
<?=$videocard->getImageUrl()?>
<p class="price">Цена <?php echo $videocard->price;?> руб</p>

<a href="<?=\yii\helpers\Url::to(['videocard/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Videocard','id'=>$videocard->id])?>"  class="btn btn-primary add-to-basket">В сборку</a></div>

<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Графическая схема:<small><?=$videocard->graphical_scheme?></small>мм</p>
		<p class="text_complex">Видео контроллер: <small><?=$videocard->video_controler?></small></p>
		<p class="text_complex">Размер под видео карту: <small><?=$videocard->size_video_memory?></small></p>
		<p class="text_complex">Количество разъёмов PCI: <small><?=$videocard->pci_count?></small></p>
		<p class="text_complex">Количество разъёмов PCIE: <small><?=$videocard->pcie_count?></small></p>
		<p class="text_complex">Мощность: <small><?=$videocard->power?></small></p>
		<p class="text_complex">Память: <small><?=$videocard->memory_id?></small></p>
</div>





