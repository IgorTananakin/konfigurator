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

    //для добавления в сборку
    public function actionAdd()
    {
        $id=Yii::$app->request->get('id');//данные из get
    // $session->open();
         $nameClass=Yii::$app->request->get('nameClass');//данные из get



         //разобрать
         $class = new \ReflectionClass("app\models\\$nameClass");
         $command = $class->newInstance();
         $n = $command::findOne($id);

         //Класс ReflectionClass сообщает информацию о классе.
        ///

        $_SESSION['assembly'][$nameClass]['id']=$n->id;
        $nameClass=Yii::$app->request->get('nameClass');//данные из get
        $_SESSION['assembly'][$nameClass]['title']=$n->title;

    // $session = Yii::$app->session;
        //$result = array_unique($_SESSION['basket']);//убираю повторения 
        return $this->redirect(['processor/test']
        );          
     
    }

}
