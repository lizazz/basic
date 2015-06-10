<?php 
$auth = Yii::$app->authManager;

// add the rule
$rule = new \app\rbac\AuthorRule;
$auth->add($rule);

// добавляем разрешение "updateOwnPost" и привязываем к нему правило.
$updateOwnPost = $auth->createPermission('updateOwnPost');
$updateOwnPost->description = 'Update own post';
$updateOwnPost->ruleName = $rule->name;
$auth->add($updateOwnPost);

// "updateOwnPost" будет использоваться из "updatePost"
$auth->addChild($updateOwnPost, $updatePost);

// разрешаем "автору" обновлять его посты
$auth->addChild($author, $updateOwnPost);