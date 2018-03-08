<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cooling_system".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property integer $socket_id
 * @property integer $power
 */
class Coolingsystem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cooling_system';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'price', 'socket_id', 'power'], 'required'],
            [['id', 'socket_id', 'power'], 'integer'],
            [['price'], 'number'],
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
            'socket_id' => 'Socket ID',
            'power' => 'Мощность',
        ];
    }
}
