<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_item".
 *
 * @property int $order_id
 * @property int $assembly_id
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'assembly_id'], 'required'],
            [['order_id', 'assembly_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'assembly_id' => 'Assembly ID',
        ];
    }
    public function getAssembly()
    {
        return $this->hasOne(Assembly::className(), ['id' => 'assembly_id']);
    } 

 
}
