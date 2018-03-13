<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "processor".
 *
 * @property string $id
 * @property string $name
 * @property string $socket
 * @property integer $price
 */
class Processor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'processor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'socket', 'price'], 'required'],
            [['price'], 'integer'],
            [['name', 'socket'], 'string', 'max' => 255],
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
            'socket' => 'Socket',
            'price' => 'Цена',
            'frequency' => 'Частота',
            'digit_capacity' => 'Разрядность',
            'keh_memory' => 'Кеш память',
            'load' => 'Нагрузка',
            'power' => 'Мощность',
        ];
    }
    public function getSocket()
    {
        return $this->hasOne(Socket::className(), ['id' => 'socket_id']);
    } 

}
