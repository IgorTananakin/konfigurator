<?php

namespace app\controllers;
use app\models\Driver;
use Yii;

class DriverController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $driver = Driver::find()->all();

        return $this->render('index',
            array('driver'=>$driver)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'driver' => Driver::findOne($id),//передаю id конкретной видеокарты
        ]);
    }


}
