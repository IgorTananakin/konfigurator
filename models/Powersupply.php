<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "power_supply".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property integer $power
 * @property integer $image
 */
class Powersupply extends \yii\db\ActiveRecord
{
      //добавление функции для вставки картинки во views
    
      public function getImageUrl()
      {
          return Url::to('@web/uploads/PowersupplyController/' . $this->image);
          
      }
      //
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'power_supply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'power'], 'required','message'=>'Не заполнено поле'],
            [['price'], 'number'],
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
            'price' => 'Цена',
            'power' => 'Мощность',
        ];
    }
}
