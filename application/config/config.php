<?php 
	$config = [ 'id' => 'HelloPage',
				 'name' => 'My first web application',
				 'basePath' => dirname(dirname(__FILE__)), 'vendorPath' => dirname(dirname(dirname(__FILE__))).'/vendor', 'components' => [ 'db' => [ 'class' => 'yiidbConnection', 'dsn' => 'mysql:host=localhost;dbname=yii2basic', 'username' => 'specinstrument', 'password' => 'specinstrument', ], ], //Другие компоненты YII2: ]; //На этапе разработки нам пригодится дебаговая панель и генератор кода if (YII_ENV_DEV) { $config['bootstrap'][] = 'debug'; $config['modules']['debug'] = 'yiidebugModule';  $config['bootstrap'][] = 'gii'; $config['modules']['gii'] = 'yiigiiModule'; }  return $config;