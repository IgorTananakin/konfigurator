<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "basket".
 *
 * @property integer $id
 * @property integer $assembly_id
 * @property integer $processor_id
 * @property integer $ram_id
 * @property integer $hard_disk_id
 * @property integer $driver_id
 * @property integer $video_card_id
 * @property integer $cooling_system_id
 * @property integer $sound_id
 * @property integer $power_supply_id
 * @property integer $network_card_id
 * @property integer $corpus_id
 */
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
    // public function addToCart($product,$qty=1)
    // {
    //     if (isset($_SESSION['basket'][$product->id]))
    //     {
    //         $_SESSION['basket'][$product->id]['qty']+=$qty;
    //     }else{
    //         $_SESSION['basket'][$product->id]=[
    //             'qty' => $qty,
    //             'title' =>$product->title,
    //             'price' => $product->price
    //         ]
    //     }
    //     $_SESSION[]
    // }
}
