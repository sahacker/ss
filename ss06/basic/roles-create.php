<?php
include_once(__DIR__."/web/index.php");
use Yii;
//use yii\console\Controller;

$role = Yii::$app->authManager->createRole('admin');
$role->description = 'Админ';
Yii::$app->authManager->add($role);
 
$role = Yii::$app->authManager->createRole('user');
$role->description = 'Юзер';
Yii::$app->authManager->add($role);
?>