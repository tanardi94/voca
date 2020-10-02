<?php

namespace backend\controllers;

use Yii;
use backend\models\Product;
use backend\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        $model->scenario = 'create';
        if ($model->load(Yii::$app->request->post())) {
            $model->unique_id = uniqid(date('siHyz'), true);
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->imageFile2 = UploadedFile::getInstance($model, 'imageFile2');
            $model->imageFile3 = UploadedFile::getInstance($model, 'imageFile3');
            $fileName =  $model->name . '-' . rand(100,1000) . '-' . $model->unique_id;
            if(!empty($model->imageFile)) {
                $model->photo = $fileName . '.' . $model->imageFile->extension;
                if($model->save(false)) {
                    $model->imageFile->saveAs(Yii::$app->params['storage'] . '/uploads/product/' . $fileName . '.' . $model->imageFile->extension);
                }
            }
            if(!empty($model->imageFile2)) {
                $model->photo_2 = $fileName . '-2.' . $model->imageFile2->extension;
                if($model->save(false)) {
                    $model->imageFile2->saveAs(Yii::$app->params['storage'] . '/uploads/product/' . $model->photo_2);
                }
            }
            if(!empty($model->imageFile3)) {
                $model->photo_3 = $fileName . '-3.' . $model->imageFile3->extension;
                if($model->save(false)) {
                    $model->imageFile3->saveAs(Yii::$app->params['storage'] . '/uploads/product/' . $model->photo_3);
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
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update';
        $files = $model->photo;
        if ($model->load(Yii::$app->request->post())) {
            $model->unique_id = uniqid(date('siHyz'), true);
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->imageFile2 = UploadedFile::getInstance($model, 'imageFile2');
            $model->imageFile3 = UploadedFile::getInstance($model, 'imageFile3');
            $fileName =  $model->name . '-' . rand(100,1000) . '-' . $model->unique_id;
            if(!empty($model->imageFile)) {
                $model->photo = $fileName . '.' . $model->imageFile->extension;
                if($model->save(false)) {
                    $model->imageFile->saveAs(Yii::$app->params['storage'] . '/uploads/product/' . $fileName . '.' . $model->imageFile->extension);
                }
            }
            if(!empty($model->imageFile2)) {
                $model->photo_2 = $fileName . '-2.' . $model->imageFile2->extension;
                if($model->save(false)) {
                    $model->imageFile2->saveAs(Yii::$app->params['storage'] . '/uploads/product/' . $model->photo_2);
                }
            }
            if(!empty($model->imageFile3)) {
                $model->photo_3 = $fileName . '-3.' . $model->imageFile3->extension;
                if($model->save(false)) {
                    $model->imageFile3->saveAs(Yii::$app->params['storage'] . '/uploads/product/' . $model->photo_3);
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
     * Deletes an existing Product model.
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
        $model = Product::findOne($id);
        if ($model->deleteImage()) {
            Yii::$app->session->setFlash('success', 
        'Your image was removed successfully. Upload another by clicking Browse below');
        } else {
            Yii::$app->session->setFlash('error', 
        'Error removing image. Please try again later or contact the system admin.');
        }
        return $this->redirect(['update', 'id' => $model->id]);
    }

    public function actionDelimage2($id)
    {
        $model = Product::findOne($id);
        if ($model->deleteImage2()) {
            Yii::$app->session->setFlash('success', 
        'Your image was removed successfully. Upload another by clicking Browse below');
        } else {
            Yii::$app->session->setFlash('error', 
        'Error removing image. Please try again later or contact the system admin.');
        }
        return $this->redirect(['update', 'id' => $model->id]);
    }

    public function actionDelimage3($id)
    {
        $model = Product::findOne($id);
        if ($model->deleteImage3()) {
            Yii::$app->session->setFlash('success', 
        'Your image was removed successfully. Upload another by clicking Browse below');
        } else {
            Yii::$app->session->setFlash('error', 
        'Error removing image. Please try again later or contact the system admin.');
        }
        return $this->redirect(['update', 'id' => $model->id]);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
