<?php
use yii\helpers\Html;//вывод кнопки submitButton
use yii\widgets\ActiveForm;//отвечает за создание форм
?>
<p>Страница создана</p>
<div class="table-responsive">
  <table class="table">
   <tr>
    <td>№</td>
	 <td>Наименование товара</td>
	 <td>Марка</td>
	 <td>Цена</td>
  </tr>
     <tr>
    <td>1</td>
	 <td>Процессор</td>
	 <td>IntelCorei5</td>
	 <td>300 руб</td>
  </tr>
  </table>
  <button type="button" class="btn btn-primary">Оформить заказ</button>
</div>