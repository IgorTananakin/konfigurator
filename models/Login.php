<?php
namespace app\models;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\base\Model;
class Login extends Model//модель прокладка 
{
    public $email;
    public $password;
    public function rules()
    {
        return [
          [['email','password'],'required','message'=>'Не заполнено поле'],
          ['email','email'],
          ['email','validatePassword'],//метод для валидации
         // ['email','unique','targetClass'=>'app\models\User'],
         // ['password','string','min'=>6,'max'=>50],
          ['password','validatePassword']
        ];
    }
    //проверка с каким конкретно пользователем сравниваю валидацию
    public function validatePassword($attribute,$params)
    {
       
        if (!$this->hasErrors())//если нет других ошибок в валидации
        {
            $user = $this->getUser();//просто вызываю
            if(!$user|| !$user->validatePassword($this->password))
            //проврка если не найден пользователь или пароль не сходиться
            //!$user->validatePassword($this->password)вызываю в User
            {
            $this->addError($attribute,'Пароль или логин введены не верно'); 
            } 
        }
        
    }
    public function getUser()//выборка пользователя для дальнешей индентификации
    {
        return User::findOne(['email'=>$this->email]);
        //User::findOne(['email'=>$this->email]); совершаю поиск по email
    }
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'password' => 'Пароль',

        ];
    }
    

}