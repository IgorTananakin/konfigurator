<?php
use yii\helpers\Html;
use app\models\Assembly;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
?>
<h1>Список заказов</h1>


<?php foreach($orders as $order_item):?>
    <p> <?php echo $order_item->id ?> </p>

<?php endforeach ?>
<a href="<?=Url::to(['order/buy'])?>"class="btn btn-more">Заказать доставку</a>
<!-- <h1>Заполните место доставки</h1>
<?//php $f=ActiveForm::begin();?>

    <p>Укажите адрес доставки</p>
    <?//php echo $f->field($order,'adress')->textInput() ?>

<a href="<?//=Url::to(['order/buy'])?>"class="btn btn-more">Заказать доставку на этот адрес</a>
<?//php ActiveForm::end();?> -->



