<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hard_disk".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property integer $socket_id
 * @property integer $power
 */
class Harddisk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hard_disk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'socket_id', 'power'], 'required'],
            [['price'], 'number'],
            [['socket_id', 'power'], 'integer'],
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
            'title' => 'Title',
            'price' => 'Price',
            'socket_id' => 'Socket ID',
            'power' => 'Power',
        ];
    }
}
