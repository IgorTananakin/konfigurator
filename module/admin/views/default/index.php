<div class="admin-default-index">
<h1>Администраторкая панель</h1>
<h3 class="text-danger">Меню</h3>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/assembly', ])?>"><p class="text-primary">Сборки</p></a>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/processor', ])?>"><p class="text-primary">Процессоры</p></a>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/videocard', ])?>"><p class="text-primary">Видеокарты</p></a>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/motherboard', ])?>"><p class="text-primary">Звуковые карты</p></a>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/corpus', ])?>"><p class="text-primary">Корпуса</p></a>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/harddisk', ])?>"><p class="text-primary">Жёсткие диски</p></a>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/driver', ])?>"><p class="text-primary">CD/DVD приводы</p></a>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/ram', ])?>"><p class="text-primary">Оперативная память</p></a>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/networkcard', ])?>"><p class="text-primary">Сетевая карта</p></a>
<a href="<?=Yii::$app->urlManager->createUrl(['admin/socket', ])?>"><p class="text-primary">Сокеты</p></a>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"  >
    Меню <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/assembly', ])?>"><p class="text-primary">Сборки</p></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/processor', ])?>"><p class="text-primary">Процессоры</p></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/videocard', ])?>"><p class="text-primary">Видеокарты</p></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/motherboard', ])?>"><p class="text-primary">Звуковые карты</p></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/corpus', ])?>"><p class="text-primary">Корпуса</p></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/harddisk', ])?>"><p class="text-primary">Жёсткие диски</p></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/driver', ])?>"><p class="text-primary">CD/DVD приводы</p></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/ram', ])?>"><p class="text-primary">Оперативная память</p></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/networkcard', ])?>"><p class="text-primary">Сетевая карта</p></a></li>
    <li><a href="<?=Yii::$app->urlManager->createUrl(['admin/socket', ])?>"><p class="text-primary">Сокеты</p></a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
