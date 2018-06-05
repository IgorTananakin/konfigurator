<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;


use yii\imagine\Image; 
use Imagine\Image\Box;

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
           if ($this->image == '') 
           {
               $str_image='<img src="/uploads/фото отсутвует.jpg" />';
           }
          else {
              $str_image='<img src="/uploads/NetworkcardController/thumbnail-200x200/' . $this->image .' "  class="button12" />';
          }
          return $str_image;
          
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
            [['title', 'power','data_transfer_speed'], 'required','message'=>'Не заполнено поле'],
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
            'data_transfer_speed' => 'Скорость передачи данных',
            'image' => 'Изображение',
            
        ];
    }
    //для изменения размера изображения
public function upload() {
    //для работы этой функции подключил расширение yii2
    //подключил библиотеки 
    //use yii\imagine\Image; 
    //use Imagine\Image\Box;
    
    //$this->image->saveAs('uploads/CorpusController/' . $this->image->baseName . '.' . $this->image->extension);

        Image::thumbnail('uploads/NetworkcardController/' .
         $this->image->baseName. '.' . $this->image->extension, 200, 200)
                ->resize(new Box(200,200))
                ->save('uploads/NetworkcardController/thumbnail-200x200/' . $this->image->baseName . '.' . $this->image->extension, 
                        ['quality' => 70]);
    //unlink('uploads/CorpusController/' . $this->image->baseName . '.'  . $this->image->extension);
    }
}
