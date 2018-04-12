<?php

namespace app\controllers;
use app\models\Motherboard;
use Yii;

class MotherboardController extends \yii\web\Controller
{
    public function actionIndex()
    {
        if (isset($_SESSION['assembly'])){
            $motherboard = Motherboard::find()->where(['socket_id' => $_SESSION['assembly']['Processor']['socket_id']])->all();
            //создаю $motherboard где processor.socket_id=motherboard.socket_id
            } else $motherboard = Motherboard::find()->all();
        

        return $this->render('index',
            array('motherboard'=>$motherboard)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'motherboard' => Motherboard::findOne($id),//передаю id конкретного корпуса
        ]);
    }


}
