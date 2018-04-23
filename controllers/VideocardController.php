<?php

namespace app\controllers;
use app\models\Videocard;
use Yii;

class VideocardController extends \yii\web\Controller
{
    public $layout = 'user';
    public function actionIndex()
    {
        $videocard = Videocard::find()->all();

        return $this->render('index',
            array('videocard'=>$videocard)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'videocard' => Videocard::findOne($id),//передаю id конкретной видеокарты
        ]);
    }


}
