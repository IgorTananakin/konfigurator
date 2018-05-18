<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => "Админка магазина",
        'brandUrl' => Url::to(['admin/index']),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
  
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
           // ['label' => 'Сборки', 'url' => [Url::to(['site/index'])]],
           // ['label' => 'Конфигуратор', 'url' => [Url::to(['site/configurator'])]],
            

           // ['label' => 'Межкомнатные двери', 'url' => 'category/2'],
            [
                'label' => 'Меню',
                'url' => ['admin'],
                'template' => '<a href="{url}">{label}<i class="fa fa-angle-down"></i></a>'."\n",
                'options' => [
                'class' => 'dropdown',
                ],
                'items' => [
                ['label' => 'Заказы', 'url' => [Url::to(['order/index'])]],
                ['label' => 'Сборки', 'url' => [Url::to(['assembly/index'])]],
                ['label' => 'Процессор', 'url' => [Url::to(['processor/index'])]],
                ['label' => 'Материнская плата', 'url' => [Url::to(['motherboard/index'])]],
                ['label' => 'Корпус', 'url' => [Url::to(['corpus/index'])]],
                ['label' => 'Оперативная память', 'url' => [Url::to(['ram/index'])]],
                ['label' => 'Жёсткий диск', 'url' => [Url::to(['harddisk/index'])]],
                ['label' => 'Звуковая карта', 'url' => [Url::to(['soundcard/index'])]],
                ['label' => 'Видео карта', 'url' => [Url::to(['videocard/index'])]],
                ['label' => 'Сетевая карта', 'url' => [Url::to(['networkcard/index'])]],
                ['label' => 'CD/DVD драйвер', 'url' => [Url::to(['driver/index'])]],
                ['label' => 'Сокет', 'url' => [Url::to(['socket/index'])]],
                ]
            ],


           // ['label' => 'Личный кабинет', 'url' => [Url::to(['site/account'])]],
		   
			//['label' => 'Корзина', 'url' => [Url::to(['basket/index'])]],
            Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выйти ' . Yii::$app->user->identity->email,
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>



<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
