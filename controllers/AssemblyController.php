<?php

namespace app\controllers;
use app\models\Assembly;
use app\models\Processor;
use app\models\Corpus;
use app\models\Coolingsystem;

use Yii;

class AssemblyController extends \yii\web\Controller
{
    public function actionView($id)
    {
        return $this->render('view', [
            'assembly' => Assembly::findOne($id),//передаю id конкретной сборки
        ]);
    }


    /////////////////////////////////////////////////для формирования сборки клиента

    public function actionCreateassembly()
    {
        $assembly = new Assembly(); 

        $assembly->title = 'Сборка пользователя';
        $assembly->sound_card_id = $_SESSION['assembly']['Soundcard']['id'];
        $assembly->video_card_id = $_SESSION['assembly']['Videocard']['id'];
        $assembly->ram_id = $_SESSION['assembly']['Ram']['id'];
        $assembly->processor_id = $_SESSION['assembly']['Processor']['id'];
        $assembly->hard_disc_id = $_SESSION['assembly']['Harddisk']['id'];
        $assembly->driver_id = $_SESSION['assembly']['Driver']['id'];
        $assembly->motherboard_id = $_SESSION['assembly']['Ram']['id'];
        $assembly->power_supply_id = $_SESSION['assembly']['Powersupply']['id'];
        $assembly->cooling_system_id = $_SESSION['assembly']['Coolingsystem']['id'];
        $assembly->corpus_id = $_SESSION['assembly']['Corpus']['id'];
        $assembly->network_card_id = $_SESSION['assembly']['Networkcard']['id'];
        
        //var_dump($assembly->id);die;
        $assembly->save();
        
        
        $id=$assembly->id;
        //var_dump($assembly->id);die;
        $_SESSION['assembly']=[];
        $_SESSION['basket'][]=$id;


        // return  $this->render('createassembly',[
        // //'assembly' => Assembly::findOne($id),
        // ]);


        return $this->redirect(['basket/index']);
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
        return $this->redirect(['processor/test']);          
     
    }

}
