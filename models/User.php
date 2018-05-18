<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\web\IndentityInterface; //подключаю интерфейс
use Yii;


class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

  public function rules()
  {
      return [
       [['email', 'username','patronymic','surname','phone'], 'safe'],
      [['email','username','patronymic','surname','phone'],'required','message'=>'Не заполнено поле'],
       ['email','email','message'=>'Email введён не верно'],

       
        
        //повторить регулярки они работают все пока не использую их раскоментировать если понадобятся
      //  ['password','match','pattern'=>'{6,}$','message'=>'Пароль должен состоять минимум из 6 символов'],
      //  ['phone', 'match', 'pattern' => '/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/', 'message' => 'Телефон должен содержать минимум 11 цифр, но не более 14. Разрешается использования + ( )' ],
        
      //  ['adress','string','min'=>3,'message'=>'Адрес введён не верно'],
      // ['username','match','pattern'=>'/^[а-яА-ЯёЁa-zA]{2,}$/','message'=>'Имя введено не верно'],
      //  ['surname','match','pattern'=>'/^[а-яА-ЯёЁa-zA]{2,}$/','message'=>'Фамилия введена не верно'],
      //  ['patronymic','match','pattern'=>'/^[а-яА-ЯёЁa-zA]{2,}$/','message'=>'Отчество введено не верно'],
      ];
  }

 



  public function attributeLabels()
  {
      return [
          'id' => 'ID',
          'username' => 'Имя',
          'surname' => 'Фамилия',
          'patronymic' => 'Отчество',
          'email' => 'Email',
          'password' => 'Пароль',
          'phone' => 'Телефон'
      ];
  }





  //Регистрация не трогать работает
  //чтобы указать чтоя использую интерфейс слово implements поможет мне в этом
  //IdentityInterface название интерфейса
  public function setPassword($password)
  {
      $this->password=sha1($password);
  }
  public function validatePassword($password)
  {
    return $this->password === sha1($password);//проверка на соответствие паролей
  }
  //компоненты скопированы из самого фреймворка для интерфейса
  //недометоды
  public static function findIdentity($id)
  {
    return self::findOne($id);//запрос в базу
  }
  public static function findIdentityByAccessToken($token, $type = null)
  {

  }
  public function getId()
  {
    return $this->id;
  }
  public function getAuthKey()
  {

  }
  public function validateAuthKey($authKey)
  {

  }
}
