<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "ram".
 *
 * @property integer $id
 * @property string $title
 * @property string $manufacturer
 * @property string $price
 * @property integer $frequency
 * @property integer $sze
 * @property integer $power
 * @property integer $image
 */
class Ram extends \yii\db\ActiveRecord
{
     //добавление функции для вставки картинки во views
    
     public function getImageUrl()
     {
         return Url::to('@web/uploads/RamController/' . $this->image);
         
     }
     //
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ram';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'manufacturer', 'price', 'frequency', 'sze', 'power'], 'required','message'=>'Не заполнено поле'],
            [['price'], 'number'],
            [['frequency', 'sze', 'power'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['manufacturer'], 'string', 'max' => 10],
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
            'manufacturer' => 'Производитель',
            'price' => 'Цена',
            'frequency' => 'Частота',
            'sze' => 'Размер',
            'power' => 'Мощность',
        ];
    }
}
