<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
use app\models\Corpus;
?>

<div class="col-md-4 ">
<h1>Материнская плата <?=$motherboard->title?></h1>
<?=$motherboard->getImageUrl()?>
<p class="price">Цена <?php echo $motherboard->price;?> руб</p>

<a href="<?=\yii\helpers\Url::to(['motherboard/index'])?>"class="btn btn-more">Назад</a>
<a href="<?=\yii\helpers\Url::to(['assembly/add','nameClass'=>'Motherboard','id'=>$motherboard->id])?>"  class="btn btn-primary add-to-basket">В сборку</a></div>

<div class="col-md-8 ">
<h3>Характеристики</h3>
		<p class="text_complex">Звуковой разъём: <small><?=$motherboard->sound?></small></p>
        <p class="text_complex">Количество PCI: <small><?=$motherboard->pci_count?></small></p>
        <p class="text_complex">Количество IDE: <small><?=$motherboard->ide_count?></small></p>
        <p class="text_complex">Графическая схема: <small><?=$motherboard->graphical_scheme?></small></p>
        <p class="text_complex">Мощность:<small><?=$motherboard->power?></small></p>
        <p class="text_complex">Сокет: <small><?=$motherboard->socket->title?></small></p>
        <p class="text_complex">Память: <small><?=$motherboard->memory_id?></small></p>
        <p class="text_complex">Форм фактор: <small><?=$motherboard->form_factor?></small></p>
</div>





