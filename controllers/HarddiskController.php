<?php

namespace app\controllers;
use app\models\Harddisk;
use Yii;

class HarddiskController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $harddisk = Harddisk::find()->all();

        return $this->render('index',
            array('harddisk'=>$harddisk)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'harddisk' => Harddisk::findOne($id),//передаю id конкретного корпуса
        ]);
    }


}
