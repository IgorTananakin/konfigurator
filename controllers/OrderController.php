<?php

namespace app\controllers;
use app\models\User;
use app\models\Order;
use app\models\Orderitem;
//use yii\web\Controller;
use Yii;

class OrderController extends \yii\web\Controller
{
    public $layout = 'user';
    public function actionBuy()
    {
        return $this->render('buy');
    }


    public function actionIndex()
    {
       // $this->layout = '//layouts/user';
        $orders = Order::find()->all();//обращаюсь не к объекту, а к таблице в базе и записываю в $orders
        $order_item = Orderitem::find()->all();
        return $this->render('index',
        array('orders'=>$orders,
        'order_item'=>$order_item
        )
    );
    }



    public function actionCreate()
    {

        $order = new Order();
        $order->user_id = Yii::$app->user->id;//записываю в объект id текущего пользователя
        $order->status = 1;
        //1 Добавлен
        //2 Доставляется
        //3 заказ отправлен
        $order->save();
        
        foreach($_SESSION['basket'] as $id) {
            $order_item = new OrderItem();
            $order_item->assembly_id = $id;
            $order_item->order_id = $order->id;//связываю таблицы по полям id order_id
            $order_item->save();
          
            
        }
        
        unset($_SESSION['basket']);//чищю сессию конкретно для корзины
        return $this->redirect(['order/index']); 
        
    }

}
