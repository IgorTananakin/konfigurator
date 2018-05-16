<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Processor;
use app\components\Myhelper;



?>


<div class="col-md-3 ">
<nav class="configurator_menu">
<h3 class="menu_item">Меню для подбора комплектующих</h3>
<!-- <p class="text-danger">Цена от</p>

<p class="text-danger">Цена до</p> -->
  <ul class="nav">
  <li>
        <a href="<?=\yii\helpers\Url::to(['corpus/index']) ?>" class="menutext">
              Корпус <?php if(isset($_SESSION['assembly']['Corpus'])){ echo $_SESSION['assembly']['Corpus']['title'];}?>
        </a>
    </li>
    <li>
          <a href="<?=\yii\helpers\Url::to(['processor/index'])?>" class="menutext">
                Процессор <?php if(isset($_SESSION['assembly']['Processor'])){ echo $_SESSION['assembly']['Processor']['title'];}?>
          </a>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['motherboard/index'])?>" class="menutext">
            Материнская плата <?php if(isset($_SESSION['assembly']['Motherboard'])){ echo $_SESSION['assembly']['Motherboard']['title'];}?>
        </a>
    </li>

    <li>
        <a href="<?=\yii\helpers\Url::to(['ram/index'])?>" class="menutext">
            Оперативная память <?php if(isset($_SESSION['assembly']['Ram'])){ echo $_SESSION['assembly']['Ram']['title'];}?>
        </a>
    </li>

    <li>
        <a href="<?=\yii\helpers\Url::to(['harddisk/index'])?>" class="menutext">
            Жёсткие диски <?php if(isset($_SESSION['assembly']['Harddisk'])){ echo $_SESSION['assembly']['Harddisk']['title'];}?>
        </a>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['soundcard/index'])?>" class="menutext">
            Звуковая карта <?php if(isset($_SESSION['assembly']['Soundcard'])){ echo $_SESSION['assembly']['Soundcard']['title'];}?>
        </a>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['videocard/index'])?>" class="menutext">
            Видео карта <?php if(isset($_SESSION['assembly']['Videocard'])){ echo $_SESSION['assembly']['Videocard']['title'];}?>
        </a>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['networkcard/index'])?>" class="menutext">
            Сетевая карта <?php if(isset($_SESSION['assembly']['Networkcard'])){ echo $_SESSION['assembly']['Networkcard']['title'];}?>
        </a>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['driver/index'])?>" class="menutext">
            CD/DVD привод <?php if(isset($_SESSION['assembly']['Driver'])){ echo $_SESSION['assembly']['Driver']['title'];}?>
    </a>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['coolingsystem/index'])?>" class="menutext">
            Кулер <?php if(isset($_SESSION['assembly']['Coolingsystem'])){ echo $_SESSION['assembly']['Coolingsystem']['title'];}?>
        </a>
    </li>
    <li>
        <a href="<?=\yii\helpers\Url::to(['powersupply/index'])?>" class="menutext">
            Блок питания <?php if(isset($_SESSION['assembly']['Powersupply'])){ echo $_SESSION['assembly']['Powersupply']['title'];}?>
        </a>
    </li>
   
   <?php //allElements(); ?>
   <?php if (Myhelper::allElements() == true): ?>
        <a href="<?=\yii\helpers\Url::to(['assembly/createassembly'])?>"  class="btn btn-primary">Заказать сборку</a>

    <?php endif; ?>

  </ul>
</nav>
</div>