<?php

namespace frontend\controllers;

use frontend\models\Information;
use frontend\models\Product;
use frontend\models\Users;

class HomeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $products = Product::findAll(['status' => 1]);
        $infos = Information::findAll(['status' => 1]);
        $users = Users::findAll(['status' => 1]);
        return $this->render('index', [
            'products' => $products,
            'infos' => $infos,
            'users' => $users
        ]);
    }

}
