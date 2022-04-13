<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $photos
 * @property string|null $header
 * @property string $text
 * @property string $date
 * @property int|null $views
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'date'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['views'], 'integer'],
            [['photos', 'header'], 'string', 'max' => 10000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'photos' => Yii::t('app', 'Photos'),
            'header' => Yii::t('app', 'Header'),
            'text' => Yii::t('app', 'Text'),
            'date' => Yii::t('app', 'Date'),
            'views' => Yii::t('app', 'Views'),
        ];
    }

    public function getShortText(){
        return mb_substr($this->text, 0, 100).'...';
    }

    public function getShortHeading(){
        return mb_substr($this->header, 0, 50).'...';
    }
}
