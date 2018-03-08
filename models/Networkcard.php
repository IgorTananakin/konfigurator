<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "network_card".
 *
 * @property integer $id
 * @property string $title
 * @property integer $power
 */
class Networkcard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'network_card';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'power'], 'required'],
            [['power'], 'integer'],
            [['title'], 'string', 'max' => 50],
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
            'power' => 'Мощность',
        ];
    }
}
