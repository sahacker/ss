<?php
include_once 'cfg.php';
include_once 'cruds.php';
include_once 'ifaces.php';
include_once 'common.php';

$act = $_GET [ 'act' ];
if ($act == 'user' ) { DoUser(); } //else
?>