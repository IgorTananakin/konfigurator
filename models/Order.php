<?php

namespace app\models;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;
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



        //проведение для сохранения даты
        public function behaviors()
        {
            return [
                'timestamp' => [
                    'class' => TimestampBehavior::className(),
                    'attributes' => [
                        ActiveRecord::EVENT_BEFORE_INSERT => ['order_date'],
                       // ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                    ],
                    'value' => new Expression('NOW()'),
    
                ],
            ];
        }
        //////////////////////////////////
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
            [['status',  'user_id'], 'integer'],
            [['order_date'],'date'],
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
    public function getOrderitems()
    {
        return $this->hasMany(Orderitem::className(), ['id' => 'order_id']);
    } 


    public function getStatusStr($order)
    {
        if ($order->status == 1)  $status="Доставляется";  
        if ($order->status == 0)  $status="Заказан"; 
        return $status;
    }
}
