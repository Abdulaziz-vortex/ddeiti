<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "videos".
 *
 * @property int $id
 * @property string|null $title
 * @property string $src
 * @property string|null $created_at
 */
class Videos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'videos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['src'], 'required'],
            [['created_at'], 'safe'],
            [['title', 'src'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'title' => 'Заголовок',
            'src' => 'cссылка на видео',
            'created_at' => 'дата',
        ];
    }
}
