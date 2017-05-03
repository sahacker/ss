<?php
include_once 'cfg.php';
include_once 'common.php';
include_once 'forms0.php';
include_once 'forms1.php';
include_once 'forms2.php';

session_start();
$login = $_SESSION [ 'user' ];
if ($login !='') { $username = $_SESSION['name']; $usermail = $_SESSION['user']; };

$language = $_GET['lang'];
if (!isset($language)) {
	$language = $_SESSION['lang'];
	if (!isset($language)) {
		$language = 'ru';
		$_SESSION['lang'] = $language;
	}
} else $_SESSION['lang'] = $language;


$messages = 0;
$act = $_GET [ 'act' ];

if ($act == 'office' ) { OfficeHandler(); } else
if ($act == 'menu' ) { MyMenu(); } else
if ($act == 'xlog' ) { MyAct(); } else
if ($act == 'logout' ) { Logout(); } else
if ($act == 'success' ) { DrawSuccess(); } else
if ($act == 'failed' ) { DrawFailed(); } else
if ($act == 'login' ) { DrawLogin(); } else
if ($act == 'remind' ) { DrawRemind(); } else
if ($act == 'register' ) { DrawRegister(); } else DrawWork($act);

?>