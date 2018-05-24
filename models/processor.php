<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;



use yii\imagine\Image; 
use Imagine\Image\Box;

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
             if ($this->image == '') 
             {
                 $str_image='<img src="/uploads/фото отсутвует.jpg" />';
             }
            else {
                $str_image='<img src="/uploads/ProcessorController/thumbnail-200x200/' . $this->image .' "  class="button12" />';
            }
            return $str_image;
            
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

    //для изменения размера изображения
    public function upload() {
        //для работы этой функции подключил расширение yii2
        //подключил библиотеки 
        //use yii\imagine\Image; 
        //use Imagine\Image\Box;
        
        //$this->image->saveAs('uploads/CorpusController/' . $this->image->baseName . '.' . $this->image->extension);
    
            Image::thumbnail('uploads/ProcessorController/' .
             $this->image->baseName. '.' . $this->image->extension, 200, 200)
                    ->resize(new Box(200,200))
                    ->save('uploads/ProcessorController/thumbnail-200x200/' . $this->image->baseName . '.' . $this->image->extension, 
                            ['quality' => 70]);


        unlink('uploads/ProcessorController/' . $this->image->baseName . '.'  . $this->image->extension);
        }

}
