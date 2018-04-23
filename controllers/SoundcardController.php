<?php

namespace app\controllers;
use app\models\Soundcard;
use Yii;

class SoundcardController extends \yii\web\Controller
{
    public $layout = 'user';
    public function actionIndex()
    {
        $soundcard = Soundcard::find()->all();

        return $this->render('index',
            array('soundcard'=>$soundcard)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'soundcard' => Soundcard::findOne($id),//передаю id конкретной видеокарты
        ]);
    }


}
