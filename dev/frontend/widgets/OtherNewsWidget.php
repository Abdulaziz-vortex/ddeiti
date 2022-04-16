<?php

namespace frontend\widgets;

use backend\models\News;
use http\Exception;
use yii\base\Widget;

class OtherNewsWidget extends Widget
{

    public $id;



    public function run(){
        $model = News::find()->where('id !='.$this->id)->limit(3)->orderBy(['id' => SORT_DESC])->all();
        if($model === null){
            throw new \yii\base\Exception('news not found');
        }
        return $this->render('other_news', ['model' => $model]);
    }

}