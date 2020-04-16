<?php

namespace app\controllers;

use Yii;
use app\models\Servico;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;
use app\models\User;
/**
 * ServicoController implements the CRUD actions for Servico model.
 */
class ServicoController extends Controller
{
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
     * Lists all Servico models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Servico::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Servico model.
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
     * Creates a new Servico model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Servico();
 $modelUpload = new UploadForm();
        if ($model->load(Yii::$app->request->post()) ) {
            $modelUpload->imageFile = UploadedFile::getInstance($model, 'foto');
            $model->foto = $modelUpload->imageFile->baseName . '.' . $modelUpload->imageFile->extension;
            $model->id_user = User::findByUsername(Yii::$app->user->identity->username)->id;
            $model->status = 1;
           if ($modelUpload->upload()) {
            $model->save() ;
           }
                   return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Servico model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
 $modelUpload = new UploadForm();
       if ($model->load(Yii::$app->request->post()) ) {
             $modelUpload->imageFile = UploadedFile::getInstance($model, 'foto');
            if($modelUpload->imageFile != null){
            $model->foto = $modelUpload->imageFile->baseName . '.' . $modelUpload->imageFile->extension;}
            else{
                 $model->save() ;
           }
           
           if ($modelUpload->upload()) {
            $model->save() ;
           }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Servico model.
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
     * Finds the Servico model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Servico the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Servico::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
