<?php

namespace app\controllers;

use Yii;
use app\models\Basket;
use app\models\Assembly;


use app\models\BasketSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;



class BasketController extends SiteController
{
   // public $layout = 'user';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }








//для работы корзины
public function actionAdd()
{
    $id=Yii::$app->request->get('id');//данные из get
   // $session->open();
   


    $_SESSION['basket'][]=$id;
   // $session = Yii::$app->session;
    //$result = array_unique($_SESSION['basket']);//убираю повторения 
    return $this->redirect(['basket/index']
    );          
     
}

public function actionDel()
{
    $id = Yii::$app->request->get('id');
    unset($_SESSION['basket'][$id]);
    return $this->redirect(['basket/index']);   
}
public function actionClear()
{
    // $id = Yii::$app->request->get('id');
    unset($_SESSION['basket']);//чищю сессию конкретно для корзины
     return $this->redirect(['basket/index']);   
}

// public function actionAdd()
// {
//     $id=Yii::$app->request->get('id');//данные из get
//     $assembly=Assembly::findOne($id);
//     if (empty($assembly))return false;
//     $session=Yii::$app->session;
//     $session->open();
//     $basket=new Basket();
//     $basket->addToBasket($assembly);
   
            
     
// }
//
// public function actionClear()
// {
//     $session=Yii::$app->session;
//     $session->open();
//     $session-remove('basket');
//     $session-remove('basket.qty');
//     $session-remove('basket.sum');
//     $this->layout=false;
//     return $this->render('basket-modal',compact('session'));
// }







    /**
     * Lists all Basket models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BasketSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Basket model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Basket model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Basket();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Basket model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Basket model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    /**
     * Finds the Basket model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Basket the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Basket::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
