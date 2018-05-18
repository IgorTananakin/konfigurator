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
        
        $orders = Order::find()->where('user_id = :id',[':id' => Yii::$app->user->id])->orderBy('order_date Desc')->all();//делаю выборку модели Order
        //$orders сортирую по дате последнего заказа
        //$order_item = Orderitem::find()->all();
        return $this->render('index',
        array('orders'=>$orders//,
        //'order_item'=>$order_item
        )
    );
    }

    public function actionView()
    {
        $id=Yii::$app->request->get('id');//данные из get id текущего заказа
        //данную задачу можно выполнить через костыль обратившись к модели Orderitem и Order
        //тогда придётся делать два запроса 1 по Order 2 по OrderItem и передавать по другому через массив 
        
        //$orders = Order::find()->all();

        //$order_item = Orderitem::find()->where('order_id = :id',[':id' => $id])->all();
        //$order = Order::find()->where('id = :id',[':id' => $id])->all();
        return $this->render('view' ,
         array(
             //'orders'=>$orders,
         'order' => Order::findOne($id),
         //'id'=>$id
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
        //  var_dump($id);die;
        foreach($_SESSION['basket'] as $key => $id) {//использую такой цикл потому что $id массив он не видит id сборки

            $order_item = new OrderItem();
            $order_item->assembly_id = $key;
            $order_item->order_id = $order->id;//связываю таблицы по полям id order_id и присваиваю значение
            $order_item->count = $id['count'];

           $order_item->save();
         
            

          
            
        }
        
        unset($_SESSION['basket']);//чищю сессию конкретно для корзины
        return $this->redirect(['order/index']); 
        
    }

}
