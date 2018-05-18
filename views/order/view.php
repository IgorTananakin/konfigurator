<?php
use yii\widgets\ActiveForm;
use app\models\Assembly;
use yii\helpers\Url;
?>
<?php ?>
<h3>  № заказа 
    <?php echo $order->id ?> 
    cтатус заказа 
    <?php  echo $order->getStatusStr($order) ?> 
    
    
</h3>

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Товар</th>
                <th>Название товара</th>
                <th>Количество</th>
                <th>Цена за одну</th>
                
                
            </tr>
        </thead>
        

    

        <tbody>
        <?php $sum_all=0; ?>
       <?php //var_dump($order->orderItems);die;?>
        <?php foreach($order->orderItems as  $order_item):?>
        <?php //переменная orderItems это виртуальное поле. Данного поля нет я обращаюсь к обработчику и он создаёт функцию на основе этой переменной?>
            <tr>
                <td><?php  echo "Сборка" ?></td>
                <td><?php  echo $order_item->assembly->title ?></td>
                <td><?php  echo $order_item->count ?></td>
                <td><?php  echo $order_item->assembly->getSum() ?> руб </td>
                
                <?php $sum_all = ($order_item->assembly->getSum() * $order_item->count) + $sum_all?>
            </tr>
        <?php endforeach ?>
       

        </tbody>
    </table>
    
    <p>Сумма всего заказа: <?php echo $sum_all ?> руб</p>


    
</div>

