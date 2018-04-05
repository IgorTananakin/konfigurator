<?php

namespace app\controllers;
use app\models\User;
use app\models\Order;
use app\models\Orderitem;

use Yii;

class OrderController extends \yii\web\Controller
{
    public function actionBuy()
    {
        return $this->render('buy');
    }
    public function actionIndex()
    {
        
        $orders = Order::find()->all();//обращаюсь не к объекту, а к таблице в базе и записываю в $orders
        $order_item = Orderitem::find()->all();
        return $this->render('index',
        array('orders'=>$orders,
        'orderitem'=>$order_item)
    );
    }
    public function actionCreate()
    {

        $order = new Order();
        $order->user_id = Yii::$app->user->id;//записываю в объект id текущего пользователя
        $order->status = 1;
        //1 заказ добавлен в базу
        //2 место доставки указано верно
        //3 заказ отправлен
        $order->save();
        
        foreach($_SESSION['basket'] as $id) {
            $order_item = new OrderItem();
            $order_item->assembly_id = $id;
            
            $order_item->save();
            
        }

        return $this->redirect(['order/index']);  
    }

}
