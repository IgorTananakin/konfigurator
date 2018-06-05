<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;


use yii\imagine\Image; 
use Imagine\Image\Box;

/**
 * This is the model class for table "hard_disk".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property integer $socket_id
 * @property integer $power
 */
class Harddisk extends \yii\db\ActiveRecord
{
     //добавление функции для вставки картинки во views
     public function getImageUrl()
     {
          if ($this->image == '') 
          {
              $str_image='<img src="/uploads/фото отсутвует.jpg" />';
          }
         else {
             $str_image='<img src="/uploads/HarddiskController/thumbnail-200x200/' . $this->image .' "  class="button12" />';
         }
         return $str_image;
         
     }
     //
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hard_disk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'socket_id', 'power'], 'required','message'=>'Не заполнено поле'],
            [['price'], 'number'],
            [['socket_id', 'power'], 'integer'],
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

        Image::thumbnail('uploads/HarddiskController/' .
         $this->image->baseName. '.' . $this->image->extension, 200, 200)
                ->resize(new Box(200,200))
                ->save('uploads/HarddiskController/thumbnail-200x200/' . $this->image->baseName . '.' . $this->image->extension, 
                        ['quality' => 70]);
    //unlink('uploads/CorpusController/' . $this->image->baseName . '.'  . $this->image->extension);
    }
}
