<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;


use yii\imagine\Image; 
use Imagine\Image\Box;

/**
 * This is the model class for table "video_card".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property string $graphical_scheme
 * @property string $video_controler
 * @property integer $size_video_memory
 * @property integer $pci_count
 * @property integer $pcie_count
 * @property integer $power
 * @property integer $image
 */
class Videocard extends \yii\db\ActiveRecord
{
      //добавление функции для вставки картинки во views
      public function getImageUrl()
      {
           if ($this->image == '') 
           {
               $str_image='<img src="/uploads/фото отсутвует.jpg" />';
           }
          else {
              $str_image='<img src="/uploads/VideocardController/thumbnail-200x200/' . $this->image .' "  class="button12" />';
          }
          return $str_image;
          
      }
      //
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video_card';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'graphical_scheme', 'video_controler', 'size_video_memory', 'pci_count', 'pcie_count', 'power','memory_id'], 'required','message'=>'Не заполнено поле'],
            [['price'], 'number'],
            [['size_video_memory', 'pci_count', 'pcie_count', 'power'], 'integer'],
            [['title', 'graphical_scheme'], 'string', 'max' => 50],
            [['video_controler'], 'string', 'max' => 30],
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
            'graphical_scheme' => 'Графическая схема',
            'video_controler' => 'Видео контроллер',
            'size_video_memory' => 'Размер видео карты',
            'pci_count' => 'Количество PCI',
            'pcie_count' => 'Количество PCIE',
            'power' => 'Мощность',
            'memory_id' => 'Память',
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

        Image::thumbnail('uploads/VideocardController/' .
         $this->image->baseName. '.' . $this->image->extension, 200, 200)
                ->resize(new Box(200,200))
                ->save('uploads/VideocardController/thumbnail-200x200/' . $this->image->baseName . '.' . $this->image->extension, 
                        ['quality' => 70]);
    //unlink('uploads/CorpusController/' . $this->image->baseName . '.'  . $this->image->extension);
    }



}
