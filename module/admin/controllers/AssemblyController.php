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
 
*/
class AssemblyController extends AdminController
{
   // public $layout = 'main';
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





    /**
     * Lists all Assembly models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AssemblySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single Assembly model.
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
     * Creates a new Assembly model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Assembly();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Assembly model.
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
     * Deletes an existing Assembly model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionAssemblymain($id)
    {
        $assemblymain= new Assembly();
        return $this->render('assemblymain',
        array('assemblymain'=>$assemblymain,
        
		

        // $assemblymain=Assembly::find()->all();
		// return $this->render('assemblymain',
		// array('assemblymain'=>$assemblymain
		
		)
		);
        // $this->findModel($id)->delete();

        // return $this->redirect(['index']);
    }

    /**
     * Finds the Assembly model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Assembly the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Assembly::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Запрашиваемая страница не существует.');
        }
    }
}
