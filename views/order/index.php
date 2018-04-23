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

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ заказа</th>
                <th>Товар</th>
                <th>Общая стоимость</th>
                <th>Дата заказа</th>
                <th>Статус заказа</th>
            </tr>
        </thead>

<?php foreach($orders as $order ):?>

        <tbody>
            <tr>
                <td><?php echo $order->id ?> </td>
                
                <td> 

                <?php $order_items = OrderItem::find()->where(['order_id' => $order->id ])->all(); ?>
                <!-- делаю выборку чтобы вывести поле у которого id в таблице order соответствует order_id в таблице order_item -->
                <?php $sum = new Assembly(); ?>
                <?php $sum_all=0;?>
            <?php foreach($order_items as $order_item ):?>
              
             
                <?php echo $order_item->assembly->title;?>
              <!-- вывожу уже конкретную сборку связь прописал в модели OrderItem -->
               
              
              <?php  $sum_all = $sum->getSum($order_item->assembly)+$sum_all;?>
               
            <?php endforeach?>
            
            </td>
                <td> <?php  echo $sum_all ?> <?php  //echo $order->getSumAll(); ?> руб </td>
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
<h3>Ваш заказ успешно оформлен ждите доставки</h3>
    <a href="<?=Url::to(['site/index'])?>"class="btn btn-primary">Вернуться на главную страницу</a>


<!-- <h1>Заполните место доставки</h1>
<?//php $f=ActiveForm::begin();?>

    <p>Укажите адрес доставки</p>
    <?//php echo $f->field($order,'adress')->textInput() ?>

<a href="<?//=Url::to(['order/buy'])?>"class="btn btn-more">Заказать доставку на этот адрес</a>
<?//php ActiveForm::end();?> -->



