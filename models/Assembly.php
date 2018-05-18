<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assembly".
 *
 * @property integer $id
 * @property integer $sound_card_id
 * @property integer $video_card_id
 * @property integer $ram_id
 * @property integer $processor_id
 * @property integer $hard_disc_id
 * @property integer $driver_id
 * @property integer $motherboard_id
 * @property integer $power_supply_id
 * @property integer $cooling_system_id
 * @property integer $corpus_id
 * @property integer $network_card_id
 */
class Assembly extends \yii\db\ActiveRecord 
{
        //добавление функции для вставки картинки во views
    
        public function getImageUrl()
        {
            return Url::to('@web/uploads/CorpusController/' . $this->image);
            
        }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'assembly';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           // [['sound_card_id', 'video_card_id', 'ram_id', 'processor_id', 'hard_disc_id', 'driver_id', 'motherboard_id', 'power_supply_id', 'cooling_system_id', 'corpus_id', 'network_card_id'], 'required'],
            //[['id'], 'required'],
            
            [['id','sound_card_id', 'video_card_id', 'ram_id', 'processor_id', 'hard_disc_id', 'driver_id', 'motherboard_id', 'power_supply_id', 'cooling_system_id', 'corpus_id', 'network_card_id'], 'integer'],

        ];
    }

    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        //выборка заголовка происходит не из таблицы, а из класса. В зависимости от 
        //того какой класс такое и название
        return [
            'id' => 'ID',
            'soundCard.title' => 'Звуковая карта',
            'videocard.title' => 'Видео карта',
            'ram.title' => 'Оперативная память',
            'processor.title' => 'Процессор',
            'harddisc.title' => 'Жёсткий диск',
            'driver.title' => 'Драйвер',
            'motherboard.title' => 'Материнская плата',
            'powersupply.title' => 'Блок питания',
            'coolingsystem.title' => 'Кулер',
            'corpus.title' => 'Корпус',
            'networkcard.title' => 'Сетевая карта',

        ];
    }

    public function getSum()
    {
        $count = $this->ram->price;
        $count = $this->processor->price+$count;
        $count = $this->motherboard->price+$count;
         $count = $this->videocard->price+$count;
         $count = $this->networkcard->price+$count;
         $count = $this->harddisc->price+$count;
         $count = $this->processor->price+$count;
         $count = $this->corpus->price+$count;
         $count = $this->driver->price+$count;
         $count = $this->coolingsystem->price+$count;
         $count = $this->powersupply->price+$count;
        
        
        return $count;
    }


    public function getSumall()
    {
        var_dump($_SESSION['basket']);die;
        
         if (!$_SESSION['basket'] > 0)
         {
            $sum = $_SESSION['basket'] * $this->$assembly->getSum();
        //     var_dump($sum);die;
         }
        return $this->redirect(['basket/index']);
    }


    
    // public function getDel($assembly)
    // {
    //     $id = Yii::$app->request->get('id');
    //     $_SESSION['basket'][]=$id;
    //     $session=Yii::$app->session;
    //     unset($_SESSION['basket']);
    // }
    public function getRam()
    {
        return $this->hasOne(Ram::className(), ['id' => 'ram_id']);
    } 
    public function getSoundCard()
    {
        return $this->hasOne(Soundcard::className(), ['id' => 'sound_card_id']);
    }
    public function getMotherboard()
    {
        return $this->hasOne(Motherboard::className(), ['id' => 'motherboard_id']);
    } 
    public function getVideocard()
    {
        return $this->hasOne(Videocard::className(), ['id' => 'video_card_id']);
    }
    
    public function getNetworkcard()
    {
        return $this->hasOne(Networkcard::className(), ['id' => 'network_card_id']);
    }
    public function getProcessor()
    {
        return $this->hasOne(Processor::className(), ['id' => 'processor_id']);
    }
    public function getHarddisc()
    {
        return $this->hasOne(Harddisk::className(), ['id' => 'hard_disc_id']);
    }
    public function getCorpus()
    {
        return $this->hasOne(Corpus::className(), ['id' => 'corpus_id']);
    }
    public function getDriver()
    {
        return $this->hasOne(Driver::className(), ['id' => 'driver_id']);
    }
    public function getCoolingsystem()
    {
        return $this->hasOne(Coolingsystem::className(), ['id' => 'cooling_system_id']);
    }
    public function getPowersupply()
    {
        return $this->hasOne(Powersupply::className(), ['id' => 'power_supply_id']);
    }



  
}
