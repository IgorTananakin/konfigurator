<?php
namespace app\models;

use Yii;
use yii\base\Model;


class MyForm extends Model
{
public $name;
public $email;
public $file;
public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email'], 'required','message'=>'Не заполнено поле'],
            // email has to be a valid email address
            ['email', 'email','message'=>'Некорректный ввод'],
			[['file'],'file','extensions'=>'png,jpg']
        ];
    }
}

?>