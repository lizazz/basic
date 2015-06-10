<?php

namespace app\models;
use app\models\Users;
use Yii;

Class UsersSaveDb {
	public $name;
	public $email;
	public $password;
	public $captcha;

	// записываем данные в базу данных
	public function showData ($form)
	{
		$saveuser = new Users;
		$saveuser->name = $form["name"];
		$saveuser->email = $form["email"];
		$saveuser->password = sha1($form["password"]);
		$saveuser->save();
		$user = Users::find()->where(['email' => $form["email"]])->one();
	//	die($user->name);
		$auth = Yii::$app->authManager;
            $authorRole = $auth->getRole('user');
            $auth->assign($authorRole, $user->id);
	}
}