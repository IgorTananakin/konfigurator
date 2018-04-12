<?php

namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;
class MenuWidget extends Widget
{
 public function run()
 {
    return $this->render('menu');
 }
}