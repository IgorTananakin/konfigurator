<?php

namespace app\controllers;
use app\models\Powersupply;
use Yii;

class PowersupplyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $powersupply = Powersupply::find()->all();

        return $this->render('index',
            array('powersupply'=>$powersupply)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'powersupply' => Powersupply::findOne($id),//передаю id конкретного корпуса
        ]);
    }


}
