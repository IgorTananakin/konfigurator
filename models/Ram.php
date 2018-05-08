<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;


use yii\imagine\Image; 
use Imagine\Image\Box;

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

    //для изменения размера изображения
public function upload() {
    //для работы этой функции подключил расширение yii2
    //подключил библиотеки 
    //use yii\imagine\Image; 
    //use Imagine\Image\Box;
    
    //$this->image->saveAs('uploads/CorpusController/' . $this->image->baseName . '.' . $this->image->extension);

        Image::thumbnail('uploads/RamController/' .
         $this->image->baseName. '.' . $this->image->extension, 200, 200)
                ->resize(new Box(200,200))
                ->save('uploads/RamController/thumbnail-200x200/' . $this->image->baseName . '.' . $this->image->extension, 
                        ['quality' => 70]);
    //unlink('uploads/CorpusController/' . $this->image->baseName . '.'  . $this->image->extension);
    }
}
