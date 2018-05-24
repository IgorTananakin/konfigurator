<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;


use yii\imagine\Image; 
use Imagine\Image\Box;

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
          if ($this->image == '') 
          {
              $str_image='<img src="/uploads/фото отсутвует.jpg" />';
          }
         else {
             $str_image='<img src="/uploads/DriverController/thumbnail-200x200/' . $this->image .' "  class="button12" />';
         }
 
         return $str_image;
         
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

    //для изменения размера изображения
public function upload() {
    //для работы этой функции подключил расширение yii2
    //подключил библиотеки 
    //use yii\imagine\Image; 
    //use Imagine\Image\Box;
    
    //$this->image->saveAs('uploads/CorpusController/' . $this->image->baseName . '.' . $this->image->extension);

        Image::thumbnail('uploads/DriverController/' .
         $this->image->baseName. '.' . $this->image->extension, 200, 200)
                ->resize(new Box(200,200))
                ->save('uploads/DriverController/thumbnail-200x200/' . $this->image->baseName . '.' . $this->image->extension, 
                        ['quality' => 70]);
    //unlink('uploads/CorpusController/' . $this->image->baseName . '.'  . $this->image->extension);
    }
}
