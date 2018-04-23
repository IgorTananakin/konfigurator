<?php
use yii\widgets\ActiveForm;
use app\models\Assembly;
use yii\helpers\Url;
?>
<?php if(!empty($_SESSION['basket'])){ //проверка на существование basket empty - определяет, установлена ли переменная?>
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
        
<?php $result = ($_SESSION['basket']);//убираю повторения временно убрал?>
<?php foreach($result as $id): ?>
    <?php $assembly = Assembly::findOne($id) ?> 

        <tbody>
            <tr>
                <td><?php echo $assembly->id ?></td>
                <td><?php echo $assembly->title ?></td>
                <td><?php echo $assembly->id ?></td>
                <?php $sum = new Assembly();/**/?>
                <td><?php echo $sum->getSum($assembly);?></td>
                <td><a href=<?=\yii\helpers\Url::to(['basket/del','id'=>$assembly->id])?>><span class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></a></td>
            </tr>
            
        
        

<?php endforeach ?>
            
        </tbody>
        
    </table>
    
    <p>Итого на сумму: </p>

     <a href="<?php  echo Url::to(['basket/clear'])?>" class="btn btn-primary">Очистить корзину</a> 
   
    


    

    <?php if (Yii::$app->user->isGuest): ?>
        <a href="<?php echo Url::to(['site/login'])?>"  class="btn btn-primary">Авторизуйтесь для оформления заказа</a>
    <?php  else: ?>
    
    
        <a href="<?php echo Url::to(['order/create'])?>" class="btn btn-primary">Оформить заказ</a>
        
    <?php endif ?>
    <?php } else if(empty($_SESSION['basket'])){ //конец проверки на существование basket ?>

        <h2>Корзина пуста закажите товар </h2>
        <a href="<?php echo Url::to(['site/index'])?>"  class="btn btn-primary">Перейти на страницу выбора товара</a>
    
    <?php } ?>



    
</div>

