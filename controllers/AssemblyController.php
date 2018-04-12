<?php

namespace app\controllers;
use app\models\Assembly;
use app\models\Processor;
use app\models\Corpus;

use Yii;

class AssemblyController extends \yii\web\Controller
{
    public function actionView($id)
    {
        return $this->render('view', [
            'assembly' => Assembly::findOne($id),//передаю id конкретной сборки
        ]);
    }



    // public function getProcessor() {
    //     return $this->hasOne(Processor::className(), ['id' => 'socket_id']);
    // }

    // public function getMotherboard() {
    //     return $this->hasOne(Motherboard::className(), ['id' => 'processor_id']);
    // }

 




    //для добавления в сборку
    public function actionAdd()
    {
        $id=Yii::$app->request->get('id');//данные из get
    // $session->open();
         $nameClass=Yii::$app->request->get('nameClass');//данные из get



         //разобрать
         $class = new \ReflectionClass("app\models\\$nameClass");//создаю класс по имени
         $command = $class->newInstance();//newInstance() Создаёт новый экземпляр класса. Принятые аргументы передаются в конструктор класса.
         $n = $command::findOne($id);

         //Класс ReflectionClass сообщает информацию о классе.
        ///

        $_SESSION['assembly'][$nameClass]['id']=$n->id;
        //$nameClass=Yii::$app->request->get('nameClass');//данные из get
        $_SESSION['assembly'][$nameClass]['title']=$n->title;





       
            if (($nameClass == 'Processor') || ($nameClass == 'Motherboard')){
                $_SESSION['assembly'][$nameClass]['socket_id'] = $n->socket_id;
               // $socket = $nameClass::find()->where(['socket_id' => $_SESSION['assembly']['socket_id']])->all();
                return $this->redirect(['processor/test']);
            }
       
        
       //$socket = Processor::find()->where(['socket_id' => $_SESSION['assembly']['socket_id']])->all();
       // foreach ($socket as $sockets) {
        //     $book = $sale->book;
        //     $clientUser = $sale->client;
        //     $sellerUser = $sale->seller;
       // }









    // $session = Yii::$app->session;
        //$result = array_unique($_SESSION['basket']);//убираю повторения 
        return $this->redirect(['processor/test']
        );          
     
    }

}
