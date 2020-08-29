<?php

namespace frontend\controllers;

class AccountController extends \yii\web\Controller
{
    public function actionProfile()
    {
        return $this->render('profile');
    }

}
