<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property integer $size
 * @property integer $power
 */
class Driver extends \yii\db\ActiveRecord
{
     //добавление функции для вставки картинки во views
    
     public function getImageUrl()
     {
         return Url::to('@web/uploads/DriverController/' . $this->image);
         
     }
     //
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'price', 'size', 'power'], 'required','message'=>'Не заполнено поле'],
            [['id',  'power'], 'integer'],
            [['price'], 'number'],
            [['title','size'], 'string', 'max' => 50],
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
            'size' => 'Размер',
            'power' => 'Мощность',
        ];
    }
}
