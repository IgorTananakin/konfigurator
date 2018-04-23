<?php

namespace app\controllers;
use app\models\Networkcard;
use Yii;

class NetworkcardController extends \yii\web\Controller
{
    public $layout = 'user';
    public function actionIndex()
    {
        $networkcard = Networkcard::find()->all();

        return $this->render('index',
            array('networkcard'=>$networkcard)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'networkcard' => Networkcard::findOne($id),//передаю id конкретного корпуса
        ]);
    }




}
