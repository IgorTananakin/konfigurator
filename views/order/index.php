<?php
use yii\helpers\Html;
use app\models\Assembly;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\Order;
use app\models\OrderItem;
use yii\db\Expression;
/* @var $this yii\web\View */
?>
<h1>Список заказов</h1>
<?php //var_dump(Yii::$app->user->id);die;?>

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ заказа</th>
                <th>Дата заказа</th>
                <th>Статус заказа</th>
            </tr>
        </thead>

<?php foreach($orders as $order ):?>
<?php //if(Yii::$app->user->id == $order->user_id): воспользоватся этим костылём если будут проблемы в sql
//получаю текущего пользователя и сравниваю его с в базе с полеме user_id
?>
        <tbody>
            <tr>
            
                <td><a href="<?=Url::to(['order/view','id'=>$order->id])?>"> <?php echo $order->id ?> </a></td>
                
                

                <?php $order_items = OrderItem::find()->where(['order_id' => $order->id ])->all(); ?>
                <!-- делаю выборку чтобы вывести поле у которого id в таблице order соответствует order_id в таблице order_item -->



            
                <td>
                    <?php  echo $order->order_date ?>
                  
                </td>
               
                <td>
                    <?php $order_status = new Order?>
                   <?php echo $order_status->getStatusStr($order);?>
                </td>
            </tr>
        </tbody>
   

<?php endforeach ?>

</table>

</div>

    <?php if(!isset(Yii::$app->user->id)):?>
        <h3> Ваш заказ не оформлен </h3>
    <?php endif ?>

    <?php if(isset(Yii::$app->user->id)):?>
        <h3> Ваш заказ успешно оформлен ждите доставки </h3>
    <?php endif ?>


    <a href="<?=Url::to(['site/index'])?>"class="btn btn-primary">Вернуться на главную страницу</a>


<!-- <h1>Заполните место доставки</h1>
<?//php $f=ActiveForm::begin();?>

    <p>Укажите адрес доставки</p>
    <?//php echo $f->field($order,'adress')->textInput() ?>

<a href="<?//=Url::to(['order/buy'])?>"class="btn btn-more">Заказать доставку на этот адрес</a>
<?//php ActiveForm::end();?> -->



