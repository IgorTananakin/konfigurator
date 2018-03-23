<?php

namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\web\IndentityInterface; //подключаю интерфейс
use Yii;


class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
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
