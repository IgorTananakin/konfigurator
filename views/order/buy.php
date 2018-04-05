<?php
use yii\helpers\Html;
use app\models\Assembly;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
?>
<h1>Ваш заказ успешно оформлен ждите доставки</h1>
<?php $f=ActiveForm::begin();?>
    <a href="<?=Url::to(['site/index'])?>"class="btn btn-primary">Вернуться на главную страницу</a>
<?php ActiveForm::end();?>







