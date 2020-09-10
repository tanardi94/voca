<?php

namespace backend\controllers;

use Yii;
use backend\models\Segment;
use backend\models\SegmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SegmentController implements the CRUD actions for Segment model.
 */
class SegmentController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Segment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SegmentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Segment model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Segment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Segment();
        $model->scenario = 'create';
        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if(!empty($model->imageFile)) {
                $fileName =  $model->title . '-' . rand(100,1000) . '-' . uniqid(date('siHyz'), true);
                $model->image = $fileName . '.' . $model->imageFile->extension;
                if($model->save(false)) {
                    $model->imageFile->saveAs('@backend/web/uploads/segment/' . $fileName . '.' . $model->imageFile->extension);
                }
            }
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Segment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update';

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if(!empty($model->imageFile)) {
                $fileName =  $model->title . '-' . rand(100,1000) . '-' . uniqid(date('siHyz'), true);
                $model->image = $fileName . '.' . $model->imageFile->extension;
                if($model->save(false)) {
                    $model->imageFile->saveAs('@backend/web/uploads/segment/' . $fileName . '.' . $model->imageFile->extension);
                }
            }
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Segment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->status = 0;
        $model->save();

        return $this->redirect(['index']);
    }

    public function actionDelimage($id)
    {
        $model = Segment::findOne($id);
        if ($model->deleteImage()) {
            Yii::$app->session->setFlash('success', 
        'Your image was removed successfully. Upload another by clicking Browse below');
        } else {
            Yii::$app->session->setFlash('error', 
        'Error removing image. Please try again later or contact the system admin.');
        }
        return $this->redirect(['update', 'id' => $model->id]);
    }

    /**
     * Finds the Segment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Segment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Segment::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
