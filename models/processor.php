<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "processor".
 *
 * @property string $id
 * @property string $name
 * @property string $socket
 * @property integer $price
 * @property integer $image
 */
class Processor extends \yii\db\ActiveRecord
{
      //добавление функции для вставки картинки во views
    
      public function getImageUrl()
      {
          return Url::to('@web/uploads/ProcessorController/' . $this->image);
          
      }
      //
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'processor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'socket', 'price'], 'required','message'=>'Не заполнено поле'],
            [['price'], 'integer'],
            [['name', 'socket'], 'string', 'max' => 255],
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
            'socket' => 'Socket',
            'price' => 'Цена',
            'frequency' => 'Частота',
            'digit_capacity' => 'Разрядность',
            'keh_memory' => 'Кеш память',
            'load' => 'Нагрузка',
            'power' => 'Мощность',
        ];
    }
    public function getSocket()
    {
        return $this->hasOne(Socket::className(), ['id' => 'socket_id']);
    } 

}
