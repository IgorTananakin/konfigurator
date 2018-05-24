<?php

namespace app\module\admin\controllers;

use Yii;
use app\models\Driver;
use app\models\DriverSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * DriverController implements the CRUD actions for Driver model.
 */
class DriverController extends AdminController
{
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
     * Lists all Driver models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DriverSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Driver model.
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
     * Creates a new Driver model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
 /**
     * Creates a new Corpus model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Driver();
        if ($model->load(Yii::$app->request->post()))  {
            //для вставки картинки в папку и в базу готово
            $model->image=UploadedFile::getInstance($model,'image');
            if($model->validate()){
                
            if ($model->image) {
                $model->image->saveAs('uploads/DriverController/'.$model->image->baseName.'.'.$model->image->extension);
                // $model->image = $model->image->baseName . '.' . $model->image->extension;
                $model->upload();//для сжатия картинки
                $model->image = $model->image->baseName . '.' . $model->image->extension;
            }
            
            
            if($model->save()){
              
            return $this->redirect(['view', 'id' => $model->id]);
            }
           
        }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Driver model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) ) {
           //для вставки картинки в папку и в базу готово
           $model->image=UploadedFile::getInstance($model,'image');
           if($model->validate()){
               
           if ($model->image) {
               $model->image->saveAs('uploads/DriverController/'.$model->image->baseName.'.'.$model->image->extension);
               $model->upload();//для сжатия картинки
               $model->image = $model->image->baseName . '.' . $model->image->extension;
           }
        }
        if ($model->save()) 
        {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Driver model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Driver model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Driver the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Driver::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
