<?php

namespace app\models;

use yii\base\Model;
use yii\captcha\Captcha;
use app\models\Users;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $captcha;
    public $warning;

    public function rules()
    {
        return [
            [['name', 'email','password','captcha'], 'required', ],
            ['email', 'unique', 'targetClass' => 'app\models\Users'],
            ['email', 'email'],['password', 'string', 'min' => 3, 'max' => 12],['name', 'string', 'min' => 3, 'max' => 189819,],['captcha', 'captcha'],
        ];
    }
}