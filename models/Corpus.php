<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

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
            [['price', 'size_hard_disc'], 'number'],
            [['size', 'power'], 'integer'],
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
            'size' => 'Размер',
            'size_hard_disc' => 'Физический размер жёсткого диска',
            'power' => 'Мощность',
        ];
    }
}
