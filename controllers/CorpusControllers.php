<?php
//бутстрапп путь web\assets\22acaca2\css\bootstrap.css
namespace app\controllers;

use Yii;
use yii\helpers\Html;//вывод кнопки submitButton
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Assembly;
use yii\data\Pagination;



class CorpusController extends Controller
{ 
    public $layout = 'user';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $assemblys=Assembly::find()->all();

        return $this->render('index',
            array('message'=>$message,
            'assemblys'=>$assemblys)
            );
            
    }
    public function actionVew()
    {

        //$assemblys=Assembly::find()->all();

        return $this->render('index',
            array('message'=>$message,
            'assemblys'=>$assemblys)
            );
            
    }
	
	
	}
