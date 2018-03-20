<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "motherboard".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property string $sound
 * @property integer $pci_count
 * @property integer $ide_count
 * @property string $graphical_scheme
 * @property integer $socket_id
 * @property integer $power
 *  @property integer $image
 */
class Motherboard extends \yii\db\ActiveRecord
{
        //добавление функции для вставки картинки во views
    
        public function getImageUrl()
        {
            return Url::to('@web/uploads/MotherboardController/' . $this->image);
            
        }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'motherboard';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'sound', 'pci_count', 'ide_count', 'graphical_scheme', 'socket_id', 'power'], 'required','message'=>'Не заполнено поле'],
            [['price'], 'number'],
            [['pci_count', 'ide_count', 'socket_id', 'power'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['sound', 'graphical_scheme'], 'string', 'max' => 30],
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
            'sound' => 'Sound',
            'pci_count' => 'Количество Pci',
            'ide_count' => 'Количество Ide',
            'graphical_scheme' => 'Графическая схема',
            'socket_id' => 'Socket',
            'power' => 'Мощность',
        ];
    }
    public function getSocket()
    {
        return $this->hasOne(Socket::className(), ['id' => 'socket_id']);
    } 
}
