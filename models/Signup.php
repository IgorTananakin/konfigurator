<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use Yii;
use yii\base\Model;


class Signup extends Model
{
  public $username;
  public $surname;
  public $patronymic;
  public $email;
  public $password;
  public $phone;
  public $adress;
  public function rules()
  {
      return [
        [['email','password','phone','adress','username','surname','patronymic'],'required','message'=>'Не заполнено поле'],
        ['email','email','message'=>'Email введён не верно'],
       
        ['email','unique','targetClass'=>'app\models\User'],
        //повторить регулярки они работают все пока не использую их раскоментировать если понадобятся
      //  ['password','match','pattern'=>'{6,}$','message'=>'Пароль должен состоять минимум из 6 символов'],
      //  ['phone', 'match', 'pattern' => '/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/', 'message' => 'Телефон должен содержать минимум 11 цифр, но не более 14. Разрешается использования + ( )' ],
        
        ['adress','string','min'=>3,'message'=>'Адрес введён не верно'],
      //  ['username','match','pattern'=>'/^[а-яА-ЯёЁa-zA]{2,}$/','message'=>'Имя введено не верно'],
      //  ['surname','match','pattern'=>'/^[а-яА-ЯёЁa-zA]{2,}$/','message'=>'Фамилия введена не верно'],
      //  ['patronymic','match','pattern'=>'/^[а-яА-ЯёЁa-zA]{2,}$/','message'=>'Отчество введено не верно'],
      ];
  }

  public function signup()
  {
      $user= new User();
      $user->username=$this->username;
      $user->surname=$this->surname;
      $user->patronymic=$this->patronymic;
      $user->email=$this->email;
      $user->phone=$this->phone;
      $user->adress=$this->adress;
      
      $user->setPassword($this->password);
     // $user->password= sha1($this->password);
      return $user->save();
  }

}
