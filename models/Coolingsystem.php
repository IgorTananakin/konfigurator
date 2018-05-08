<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;



use yii\imagine\Image; 
use Imagine\Image\Box;

/**
 * This is the model class for table "cooling_system".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property integer $socket_id
 * @property integer $power
 * @property integer $image
 */
class Coolingsystem extends \yii\db\ActiveRecord
{
     //добавление функции для вставки картинки во views
    
     public function getImageUrl()
     {
         return Url::to('@web/uploads/CoolingsystemController/' . $this->image);
         
     }
     //
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cooling_system';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'price', 'socket_id', 'power'], 'required','message'=>'Не заполнено поле'],
            [['id', 'socket_id', 'power'], 'integer'],
            [['price'], 'number'],
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
            'socket_id' => 'Socket',
            'power' => 'Мощность',
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

        Image::thumbnail('uploads/CoolingsystemController/' .
         $this->image->baseName. '.' . $this->image->extension, 200, 200)
                ->resize(new Box(200,200))
                ->save('uploads/CoolingsystemController/thumbnail-200x200/' . $this->image->baseName . '.' . $this->image->extension, 
                        ['quality' => 70]);
   // unlink('uploads/CorpusController/' . $this->image->baseName . '.'  . $this->image->extension);
    }
}
