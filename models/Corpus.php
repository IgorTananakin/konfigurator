<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "corpus".
 *
 * @property integer $id
 * @property string $title
 * @property string $price
 * @property integer $size
 * @property string $size_hard_disc
 * @property integer $power
 */
class Corpus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'corpus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'size', 'size_hard_disc', 'power'], 'required'],
            [['price', 'size_hard_disc'], 'number'],
            [['size', 'power'], 'integer'],
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
            'title' => 'Title',
            'price' => 'Price',
            'size' => 'Size',
            'size_hard_disc' => 'Size Hard Disc',
            'power' => 'Power',
        ];
    }
}
