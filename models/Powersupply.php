<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "power_supply".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property integer $power
 */
class Powersupply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'power_supply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'power'], 'required'],
            [['price'], 'number'],
            [['power'], 'integer'],
            [['title'], 'string', 'max' => 50],
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
            'power' => 'Мощность',
        ];
    }
}
