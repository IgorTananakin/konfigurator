<?php

namespace app\controllers;
use app\models\Assembly;

class AssemblyController extends \yii\web\Controller
{
    public function actionView($id)
    {
        return $this->render('view', [
            'assembly' => Assembly::findOne($id),//передаю id конкретной сборки
        ]);
    }

}
