<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "processor".
 *
 * @property int $id
 * @property string $title
 * @property int $socket_id
 * @property int $price
 * @property string $frequency
 * @property int $digit_capacity
 * @property int $keh_memory
 * @property int $load
 * @property int $power
 * @property string $image
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
            [['title', 'socket_id', 'price', 'frequency', 'digit_capacity', 'keh_memory', 'load', 'power'], 'required','message'=>'Не заполнено поле'],
            [['socket_id', 'price', 'digit_capacity', 'keh_memory', 'load', 'power'], 'integer'],
            [['frequency'], 'number'],
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
            'socket_id' => 'Socket',
            'price' => 'Цена',
            'frequency' => 'Частота',
            'digit_capacity' => 'Разрядность',
            'keh_memory' => 'Кеш память',
            'load' => 'Нагрузка',
            'power' => 'Мощность',
            'image' => 'Изображение',
        ];
    }
    public function getSocket()
    {
        return $this->hasOne(Socket::className(), ['id' => 'socket_id']);
    }
}
