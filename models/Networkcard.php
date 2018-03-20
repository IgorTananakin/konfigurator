<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "network_card".
 *
 * @property integer $id
 * @property string $title
 * @property integer $power
 * @property integer $image
 */
class Networkcard extends \yii\db\ActiveRecord
{
      //добавление функции для вставки картинки во views
    
      public function getImageUrl()
      {
          return Url::to('@web/uploads/NetworkcardController/' . $this->image);
          
      }
      //
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'network_card';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'power'], 'required','message'=>'Не заполнено поле'],
            [['power'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['image'],'image'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'power' => 'Мощность',
        ];
    }
}
