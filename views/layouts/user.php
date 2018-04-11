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
        'brandLabel' => "Интернет магазин",
        'brandUrl' => Url::to(['site/index']),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    //$count=sizeof($_SESSION['basket']); 

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Сборки', 'url' => [Url::to(['index'])]],
            ['label' => 'Конфигуратор', 'url' => ['corpus/index']],
            ['label' => 'Личный кабинет', 'url' => [Url::to(['site/account'])]],
            ['label' => 'Корзина '/*.$count*/, 'url' => [Url::to(['basket/index'])]],
            
            // ['label' => 'Регистрация', 'url' => [Url::to(['site/signup'])]],
            Yii::$app->user->isGuest ? (


                [
                    'label' => 'Регистрация/Войти',
                    'url' => ['user'],
                    'template' => '<a href="{url}">{label}<i class="fa fa-angle-down"></i></a>'."\n",
                    'options' => [
                    'class' => 'dropdown',
                    ],
                    'items' => [
                    
                ['label' => 'Регистрация', 'url' => ['site/signup']],
                ['label' => 'Войти', 'url' => ['site/login']]
                  
                    ]
                ]
            ) : (
                '<li>'
                . Html::beginForm(['site/logout'], 'post')
                . Html::submitButton(
                    'Выйти ' . Yii::$app->user->identity->email,//отбражаю email пользователя или клиента
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

<!-- <?//php \yii\bootstrap\Modal::begin([
// 'header'=>'<h2>Корзина</h2>',
// 'id'=>'basket',
// 'footer'=>'<button type="button" class="btn btn-default"
// data-dismiss="modal">Закрыть</button>
// <button type="button" class="btn btn-primary">оформить заказ </button>'

// ]);
// \yii\bootstrap\Modal::end();?> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
