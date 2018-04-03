<?php
use yii\widgets\ActiveForm;
use app\models\Assembly;
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
        
<?php $result = array_unique($_SESSION['basket']);//убираю повторения ?>
<?php foreach($result as $id): ?>
    <?php $assembly = Assembly::findOne($id) ?> 

        <tbody>
            <tr>
                <td><?php echo "Сборка ".$assembly->id ?></td>
                <td><?php echo $assembly->ram->title ?></td>
                <td><?php echo $assembly->id ?></td>
                <?php $sum = new Assembly();/**/?>
                <td><?php echo $sum->getSum($assembly);?></td>
                <td><span class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
            </tr>
            
        
        

<?php endforeach ?>
            
        </tbody>
        
    </table>
    
    <p>Итого на сумму: </p>
    <button>Очистить корзину</button>
</div>
<?php } ?>
