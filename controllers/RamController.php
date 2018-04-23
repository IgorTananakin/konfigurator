<?php

namespace app\controllers;
use app\models\Ram;
use Yii;

class RamController extends \yii\web\Controller
{
    public $layout = 'user';
    public function actionIndex()
    {
        $ram = Ram::find()->all();

        return $this->render('index',
            array('ram'=>$ram)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'ram' => Ram::findOne($id),//передаю id конкретного корпуса
        ]);
    }


}
