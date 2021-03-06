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
use app\models\Signup;
use app\models\Login;
use app\models\User;
use app\models\Corpus;
//use app\models\NotFoundHttpException;




//use yii\filters\AccessControl;// просмотреть зачем нужно

class SiteController extends Controller
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
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                        
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
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
        $message="Hello word";
        $assemblys=Assembly::find()->all();
        return $this->render('index',
            array('message'=>$message,
            'assemblys'=>$assemblys)
            );
            
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////

    public function actionConfigurator()
    {

        
        $corpus = Corpus::find()->all();

        return $this->render('configurator',
            array('corpus'=>$corpus)
            );
            
    }


////////////////////////////////////////////////////////////////////////////////////////////////////
   

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()//разобраться в методе
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    
    // public function actionAccount()
    // {

    //     $account = new Signup();

    //     return $this->render('account',
    //         array('account'=>$account
    //         )
    //         );
            
    // }



    //повторить
    public function actionAccount()
    {
        $account = User::findOne(Yii::$app->user->identity->id);
        // var_dump(User::findOne(Yii::$app->user->identity->id)); 
        
        if (!isset($account)) {
            throw new NotFoundHttpException(404 ,'Пользователь не найден');
        }
       // $account->scenario = 'update';
       
        //var_dump($account);
        //var_dump(Yii::$app->request->post());die;
//var_dump(Yii::$app->request->post());die;

        if ($account->load(Yii::$app->request->post()) ) {
          
            $isValid = $account->validate();
        //var_dump(Yii::$app->request->post());die;
//$account->save();
            // $isValid = $profile->validate() && $isValid;
            //var_dump($isValid);die;
            //var_dump($account);die;
            if ($isValid) {
                $account->save(false);
                
                return $this->redirect(['site/account','id' => Yii::$app->user->identity->id]);
            }
        }
        $account->save();
        return $this->render('account', [
            'account' => $account
        ]);
    }




/////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function actionSignup()
    {
        $model = new Signup();

        if(isset($_POST['Signup']))
        {
            $model->attributes=Yii::$app->request->post('Signup');
            if($model->validate()&& $model->signup())
            {
                
               return $this->goHome();
            }
        }
        return $this->render('signup',['model'=>$model]);
        
    }

    public function actionLogin()
    {
        $login_model = new Login();
        if (Yii::$app->request->post('Login'))//проверка на приход данных
        {
            //  if (Yii::$app->user->isGuest)//если пользователь залогинился перенаправляю его на index //разобрать в этом условии
            // {
            //     return $this->goHome();
            // }
            //проверяю соответствует ли данные в базе
            $login_model->attributes=Yii::$app->request->post('Login');
            
            if ($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                //даю возможность для пользователя и клиента сайта использовать
                //свои данные на всём участке сайта
                //проще авторизация пользователя в систем
                //$app юзер, но он не имеет не чего общего с моделью user
                //$app компонент для управления пользователя в системе
                //$login_model->getUser() передаю конкретного пользователя
                //метод login принимает только тот экземпляр модели который реализует интерфейс IndentityInterface
                return $this->goHome();
            }
        }
        return $this->render('login',['login_model'=>$login_model]);
           
    }
    
   
	
	
	
	
	}
