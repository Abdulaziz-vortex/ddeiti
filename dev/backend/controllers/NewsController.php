<?php

namespace backend\controllers;

use backend\models\Videos;
use Yii;
use backend\models\News;
use backend\models\NewsSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

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
            $model->photos = UploadedFile::getInstance($model,'photos');
            if($model->save()){
                $model->upload();
                return $this->render('view',['model' => $model]);
            }
        }
        
        return $this->render('create', ['model' => $model]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Videos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

}