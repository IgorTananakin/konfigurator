<?php
use yii\widgets\ActiveForm;
use app\models\Assembly;
use yii\helpers\Url;
?>
<?php if(!empty($_SESSION['basket'])){?>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Товар</th>
                <th>Название товара</th>
                <th>Количество</th>
                <th>Цена</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
        </thead>
        
<?php $result = ($_SESSION['basket']);//убираю повторения ?>
<?php foreach($result as $id): ?>
    <?php $assembly = Assembly::findOne($id) ?> 

        <tbody>
            <tr>
                <td><?php echo $assembly->id ?></td>
                <td><?php echo $assembly->ram->title ?></td>
                <td><?php echo $assembly->id ?></td>
                <?php $sum = new Assembly();/**/?>
                <td><?php echo $sum->getSum($assembly);?></td>
                <td><a href=<?=\yii\helpers\Url::to(['basket/del','id'=>$assembly->id])?>><span class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></a></td>
            </tr>
            
        
        

<?php endforeach ?>
            
        </tbody>
        
    </table>
    
    <p>Итого на сумму: </p>
    <button>Очистить корзину</button>
    <?php } ?>


    <?php if (Yii::$app->user->isGuest): ?>
        <a href="<?php echo Url::to(['site/login'])?>"  class="btn btn-primary">Авторизуйтесь для оформления заказа</a>
    <?php  else: ?>
        <a href="<?php echo Url::to(['order/create'])?>" class="btn btn-primary">Оформить заказ</a>
    <?php endif ?>
    
   
</div>

