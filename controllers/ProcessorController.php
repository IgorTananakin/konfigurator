<?php

namespace app\controllers;
use app\models\Processor;
use Yii;

class ProcessorController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $processor = Processor::find()->all();

        return $this->render('index',
            array('processor'=>$processor)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'processor' => Processor::findOne($id),//передаю id конкретного корпуса
        ]);
    }


    public function actionTest()
    {

        return $this->render('test'

            );
    }



}
