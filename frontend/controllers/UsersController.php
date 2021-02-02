<?php

namespace frontend\controllers;

use backend\models\Users as ModelsUsers;
use Yii;
use frontend\models\Users;
use frontend\models\UsersSearch;
use yii\base\DynamicModel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller
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
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Users model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = ModelsUsers::findOne(['status' => 1, 'unique_id' => $id]);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Users();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionChangepw($unique_id)
    {
        $additionalModel = new DynamicModel([
            'old_password', 'new_password', 'another_new_password'
        ]);
        $additionalModel->addRule(['old_password', 'new_password', 'another_new_password'], 'required', ['message' => '{attribute} tidak boleh kosong'])->addRule(
            ['old_password', 'new_password', 'another_new_password'], 'string'
        );
        $model = ModelsUsers::findOne(['status' => 1, 'unique_id' => $unique_id]);
        if($additionalModel->load(Yii::$app->request->post()) && $additionalModel->validate()) {
            if($model->validatePassword($additionalModel->old_password)) {
                if($additionalModel->new_password == $additionalModel->another_new_password) {
                    $model->setPassword($additionalModel->new_password);
                    if($model->validatePassword($additionalModel->new_password)) {
                        Yii::$app->session->setFlash('success', 
                        'Password anda berhasil diubah');
                    } else {
                        Yii::$app->session->setFlash('error', 
                        'Mohon maaf telah terjadi kesalahan, silakan mencoba untuk ubah password lagi');   
                    }
                    // return $this->redirect(['view', 'id' => $model->unique_id]);
                } else {
                    Yii::$app->session->setFlash('error', 
                    'Password baru dengan verifikasi tidak sama');  
                }
            } else {
                
                Yii::$app->session->setFlash('error', 
                'Password yang anda masukkan salah');   
            }
            return $this->refresh();
            // return $this->redirect(['view', 'id' => $model->unique_id]);
        }
        return $this->render('changepw', [
            'model' => $model,
            'additionalModel' => $additionalModel
        ]);
    }

    /**
     * Updates an existing Users model.
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
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if(!empty($model->imageFile)) {
                $fileName =  $model->name . '-' . rand(100,1000) . '-' . $model->unique_id;
                $model->photo = $fileName . '.' . $model->imageFile->extension;
                if($model->save(false)) {
                    $model->imageFile->saveAs(Yii::$app->params['storage'] . '/uploads/users/' . $fileName . '.' . $model->imageFile->extension);
                }
            }
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->unique_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelimage($id)
    {
        $model = ModelsUsers::findOne(['unique_id' => $id]);
        if ($model->deleteImage()) {
            Yii::$app->session->setFlash('success', 
        'Your image was removed successfully. Upload another by clicking Browse below');
        } else {
            Yii::$app->session->setFlash('error', 
        'Error removing image. Please try again later or contact the system admin.');
        }
        return $this->redirect(['update', 'id' => $model->unique_id]);
    }

    /**
     * Deletes an existing Users model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ModelsUsers::findOne(['unique_id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
