<?php

// require_once 'vendor\yiisoft\yii2\rbac\DbManager.php';
require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/config/web.php');


use yii\rbac\DbManager;

$r=new DbManager;
$r->init();
$test = $r->createRole('test');
$r->add($test);

?>