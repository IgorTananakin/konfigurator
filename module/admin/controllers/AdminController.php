<?php

namespace app\module\admin\controllers;

use Yii;
use app\models\Assembly;
use app\models\AssemblySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
 use yii\web\HttpException;

/**
 * AssemblyController implements the CRUD actions for Assembly model.
 
*@property int $admin
*/
class AdminController extends Controller
{
    
    public function beforeAction($action)
    {
        $user = Yii::$app->user->identity;//обращаюсь к конкретному пользователю
        if ((isset( $user )) && $user->admin == 1)//isset( $user ) проверка на не залогининового пользователя
                                                //$user->admin == 1 проверка на админа
        {
            return parent::beforeAction($action);
            
        }
        else

        throw new HttpException(403, "Доступ запрещён");
      
      
    }


 


 

   

  

   
  

  
}
