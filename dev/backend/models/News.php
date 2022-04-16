<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
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
            [['text','header'], 'string'],
            [['date'], 'safe'],
            [['views'], 'integer'],
            [['photos'], 'file','skipOnEmpty' => false, 'extensions' => 'png, jpg'],
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

        $text = mb_substr($this->text, 0, 100).'...';
        return strip_tags($text,['p','br']);
    }

    public function getShortHeading(){
        return mb_substr($this->header, 0, 50).'...';
    }

    public function upload(){
        if($this->validate()){
            $this->photos->saveAs('uploads/'. $this->photos->baseName .'.'.$this->photos->extension);
            return true;
        }else{
            return false;
        }
    }
}
