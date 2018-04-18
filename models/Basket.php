<?php

namespace app\models;

use Yii;


class Basket extends \yii\db\ActiveRecord
{





    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['assembly_id', 'processor_id', 'ram_id', 'hard_disk_id', 'driver_id', 'video_card_id', 'cooling_system_id', 'sound_id', 'power_supply_id', 'network_card_id', 'corpus_id'], 'required'],
            [['assembly_id', 'processor_id', 'ram_id', 'hard_disk_id', 'driver_id', 'video_card_id', 'cooling_system_id', 'sound_id', 'power_supply_id', 'network_card_id', 'corpus_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'assembly_id' => 'Assembly ID',
            'processor_id' => 'Processor ID',
            'ram_id' => 'Ram ID',
            'hard_disk_id' => 'Hard Disk ID',
            'driver_id' => 'Driver ID',
            'video_card_id' => 'Video Card ID',
            'cooling_system_id' => 'Cooling System ID',
            'sound_id' => 'Sound ID',
            'power_supply_id' => 'Power Supply ID',
            'network_card_id' => 'Network Card ID',
            'corpus_id' => 'Corpus ID',
        ];
    }
    // public function addToBasket($assembly,$qty=1)
    // {
    //     echo "jrvndfkbdfk";die;
    //     var_dump( "Worked!");die;
    // //       if (isset($_SESSION['basket'][$assembly->id]))//проверка если в корзине уже
    // //       {
    // //          $_SESSION['basket'][$assembly->id]['qty']+=$qty;
    // //       }else{
    //         //   $_SESSION['basket'][$assembly->id]=[
    //         //       'qty' => $qty,
    //         //       'title' =>$assembly->title,
    //         //       'price' => $assembly->price
    //         //   ];
    // //       }
    // //       $_SESSION['basket.qty'] = isset($_SESSION['basket.qty']) ? $_SESSION['basket.qty'] + $qty : $qty;
    // // //добавляю в массив basket.qty и проверяю если есть такой товар то плюсую количество если нет то добавляю один к количеству
    // // $_SESSION['basket.sum'] = isset($_SESSION['basket.sum']) ? $_SESSION['basket.sum'] + $qty * $assembly->price : $qty * $assembly->price;
    //  }
    public function addToBasket($assembly,$qty=1)
    {
        // echo "jrvndfkbdfk";die;
        // var_dump( "Worked!");die;
         
              $_SESSION['basket'][$assembly->id]=[
                  'qty' => $qty,
                  'title' =>$assembly->ram_id,
                  
              ];
          
    echo ($_SESSION['basket'][$assembly-id]);die;
    
     }
}
