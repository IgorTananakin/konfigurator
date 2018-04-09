<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $status
 * @property int $order_date
 * @property int $user_id
 * @property string $adress
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['user_id', 'required'],
            [['status', 'order_date', 'user_id'], 'integer'],
            [['adress'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'order_date' => 'Order Date',
            'user_id' => 'User ID',
            'adress' => 'Adress',
        ];
    }
    public function getOrderitem()
    {
        return $this->hasOne(Orderitem::className(), ['id' => 'order_id']);
    } 
}
