<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

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
          return Url::to('@web/uploads/VideocardController/' . $this->image);
          
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
            [['title', 'price', 'graphical_scheme', 'video_controler', 'size_video_memory', 'pci_count', 'pcie_count', 'power'], 'required','message'=>'Не заполнено поле'],
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
            'pci_count' => 'Pci количество',
            'pcie_count' => 'Pcie количество',
            'power' => 'Мощность',
        ];
    }
}
