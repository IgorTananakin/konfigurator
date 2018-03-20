<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;

/**
 * This is the model class for table "socket".
 *
 * @property integer $id
 * @property string $title
 * 
 */
class Socket extends \yii\db\ActiveRecord
{
     
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'socket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required','message'=>'Не заполнено поле'],
            [['title'], 'string', 'max' => 20],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
        ];
    }
}
