<?php

namespace app\controllers;
use app\models\Coolingsystem;
use Yii;

class CoolingsystemController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $coolingsystem = Coolingsystem::find()->all();

        return $this->render('index',
            array('coolingsystem'=>$coolingsystem)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'coolingsystem' => Coolingsystem::findOne($id),//передаю id конкретного корпуса
        ]);
    }


}
