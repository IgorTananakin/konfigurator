<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;



use yii\imagine\Image; 
use Imagine\Image\Box;

/**
 * This is the model class for table "corpus".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property integer $size
 * @property string $size_hard_disc
 * @property integer $power
 * @property integer $image
 */
class Corpus extends \yii\db\ActiveRecord
{
   

    //добавление функции для вставки картинки во views
    
    public function getImageUrl()
    {
        return Url::to('@web/uploads/CorpusController/' . $this->image);
        
    }
    //

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'corpus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'size', 'size_hard_disc', 'power'], 'required','message'=>'Не заполнено поле'],
            [['price'], 'number'],
            [[ 'power'], 'integer'],
            [['size','title', 'size_hard_disc'], 'string', 'max' => 50],
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
            'size_hard_disc' => 'Физический размер под жёсткий диск',
            'power' => 'Мощность',
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

        Image::thumbnail('uploads/CorpusController/' .
         $this->image->baseName. '.' . $this->image->extension, 200, 200)
                ->resize(new Box(200,200))
                ->save('uploads/CorpusController/thumbnail-200x200/' . $this->image->baseName . '.' . $this->image->extension, 
                        ['quality' => 70]);
    //unlink('uploads/CorpusController/' . $this->image->baseName . '.'  . $this->image->extension);
    }

}
