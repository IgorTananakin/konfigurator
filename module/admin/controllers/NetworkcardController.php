<?php

namespace app\module\admin\controllers;

use Yii;
use app\models\Networkcard;
use app\models\NetworkcardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NetworkcardController implements the CRUD actions for Networkcard model.
 */
class NetworkcardController extends AdminController
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
     * Lists all Networkcard models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NetworkcardSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Networkcard model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreate()
    {
        $model = new Networkcard();
        if ($model->load(Yii::$app->request->post()))  {
            //для вставки картинки в папку и в базу готово
            $model->image=UploadedFile::getInstance($model,'image');
            if($model->validate()){
                
            if ($model->image) {
                $model->image->saveAs('uploads/NetworkcardController/'.$model->image->baseName.'.'.$model->image->extension);
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
     * Updates an existing Networkcard model.
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
               $model->image->saveAs('uploads/NetworkcardController/'.$model->image->baseName.'.'.$model->image->extension);
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
     * Deletes an existing Networkcard model.
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
     * Finds the Networkcard model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Networkcard the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Networkcard::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
