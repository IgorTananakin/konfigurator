<?php

namespace app\controllers;
use app\models\Processor;
use app\components\MenuWidget;
use Yii;

class ProcessorController extends \yii\web\Controller
{
    public $layout = 'user';
    public function actionIndex()
    {
    //     if ($_SESSION['assembly']['Processor']['socket_id'] == $_SESSION['assembly']['Motherboard']['socket_id'])
    //    {

    //    }
    if (isset($_SESSION['assembly'])){
    $processor = Processor::find()->where(['socket_id' => $_SESSION['assembly']['Motherboard']['socket_id']])->all();
    } else $processor = Processor::find()->all();
    //$processor = Processor::find(['socket_id' => 3]) ->all();;
    //   $processor = Processor::findOne($socket_id=3);
       
       
       
       
       
       
       ///////////////////////////////
        //$processor = Processor::find()->all();
      
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
