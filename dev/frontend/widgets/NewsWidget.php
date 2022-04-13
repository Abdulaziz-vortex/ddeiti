<?php

namespace frontend\widgets;

use backend\models\News;
use yii\base\Widget;

class NewsWidget extends Widget
{

    public $data;

    public function init()
    {
        $this->data = News::find()->limit(6)->orderBy(['id' => SORT_DESC])->all();
    }

    public function run(){
        return $this->render('news', ['data' => $this->data]);
    }

}