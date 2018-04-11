<?php

namespace app\controllers;
use app\models\Corpus;
use Yii;

class CorpusController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $corpus = Corpus::find()->all();

        return $this->render('index',
            array('corpus'=>$corpus)
            );
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'corpus' => Corpus::findOne($id),//передаю id конкретного корпуса
        ]);
    }


}
