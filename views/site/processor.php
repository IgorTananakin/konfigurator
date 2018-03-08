<?php
use yii\widgets\LinkPager;
?>
<h1>Комментарии</h1>
<p class="text">Вас зовут <a href="<?=Yii::$app->urlManager->createUrl(['site/user','name'=>$name])?>"><?=$name?></a>
</p>
<a href="#" class="button12">Кнопка</a>
<ul>
<?php foreach ($processor as $processor){?>
<li><b>
<a href="<?=Yii::$app->urlManager->createUrl(['site/user','name'=>$processor->name])?>"><?=$processor->name?>:</a>:
</b><?=$processor->socket?></li>
<?php }?>
</ul>
<img src="image/sborka1.jpg" class="button12"alt="картинка сборки"/>
<?= LinkPager::widget(['pagination' => $pagination])?>