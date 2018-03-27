<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;
use yii\base\Model;


class Signup extends Model
{
  public $email;
  public $password;
  public function rules()
  {
      return [
        [['email','password','phone'],'required'],
        ['email','email'],
       
        ['email','unique','targetClass'=>'app\models\User'],
        ['password','string','min'=>6,'max'=>50],
        ['phone','string','min'=>11]

      ];
  }
  public function signup()
  {
      $user= new User();
      $user->email=$this->email;
      $user->phone=$this->phone;
      
      $user->setPassword($this->password);
     // $user->password= sha1($this->password);
      return $user->save();
  }

}
