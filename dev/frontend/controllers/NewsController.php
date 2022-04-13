<?php

namespace frontend\controllers;

use backend\models\News;
use yii\web\Controller;

class NewsController extends Controller
{

    public function actionIndex(){

    }

    public function actionView($id){
        $this->layout = 'second';
        $model = News::findOne($id);
        if(empty($model))
            return $this->render('404');

        return $this->render('view',['data' => $model]);
    }

}