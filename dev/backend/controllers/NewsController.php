<?php

namespace backend\controllers;

use Yii;
use backend\models\News;
use backend\models\NewsSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class NewsController extends Controller
{

    public function actionIndex(){
        $data = new ActiveDataProvider(['query' => News::find()]);
        $search = new NewsSearch();
        return $this->render('index', ['dataProvider' => $data, 'searchModel' => $search]);
    }

    public function actionView($id){
        $model = News::findOne($id);
        return $this->render('view', ['model' => $model]);
    }

    public function actionCreate(){

        $model = new News();
        
        if(Yii::$app->request->post()){
            $model->load(Yii::$app->request->post());
            $model->save();
            return $this->render('view',['model' => $model]);
        }
        
        return $this->render('create', ['model' => $model]);
    }

}