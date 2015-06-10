<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\captcha\Captcha;

class Users extends ActiveRecord
{
	//Описываем правила валидации для данных модели 
	 public function rules()
    {
        return [
            [['name', 'password'], 'trim'],
        ];
    }

    public function beforeSave()
{
    $this->name = mysql_escape_string($this->name);
    $this->password = mysql_escape_string($this->password);
    return true;
}
}