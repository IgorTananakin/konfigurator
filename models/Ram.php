<?php

namespace app\models;

use Yii;

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
 */
class Ram extends \yii\db\ActiveRecord
{
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
            [['title', 'manufacturer', 'price', 'frequency', 'sze', 'power'], 'required'],
            [['price'], 'number'],
            [['frequency', 'sze', 'power'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['manufacturer'], 'string', 'max' => 10],
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
}
