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
<h1>Заполните место доставки</h1>
<?php $f=ActiveForm::begin();?>

    <p>Укажите адрес доставки</p>
    <?//=$f->field($model,'adress')->textInput() не работает?>

<a href="<?=Url::to(['order/buy'])?>"class="btn btn-more">Заказать доставку на этот адрес</a>
<?php ActiveForm::end();?>



