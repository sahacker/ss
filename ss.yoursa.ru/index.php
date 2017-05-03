<?php

$sshtml = <<<SS_HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Simplex Server</title>
<link rel="stylesheet" href="ss.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="ss.js"></script>
</head><body class="page_bg">
SS_HTML;

echo $sshtml;
 $act = $_GET [ 'act' ];
 if (isset($act)) { echo "<script>defaultpage="; echo $act; echo ";</script>"; 
    if ($act > 8) { echo "<script>is_registered=true;</script>"; } else { echo "<script>is_registered=false;</script>"; };
 }; 

session_start();
 $login = $_SESSION [ 'user' ];
 if ($login =='') { echo "<script>is_registered=false;</script>"; } else { echo '<script>is_registered=true; userid="'.$_SESSION['uid'].'"; status="'.$_SESSION['role'].'"; 
 username="'.$_SESSION['name'].'"; usermail="'.$_SESSION['user'].'"; </script>'; };
 
$ssheader = <<<SS_H
<div class="main_layer">
<!--  Page header -->
<script>DrawHeader();</script>
SS_H;
echo $ssheader;

$ssmain = <<<SS_MAIN
<!--  Page Menu -->
<div class="menu"></div>
<!--  Page Main -->
<div class="main"> <div class="cases"></div>
<script> DrawLMenu(); DrawForms(defaultpage);</script>
</div>
SS_MAIN;
echo $ssmain;

$ssfooter = <<<SS_F
<!--  Page footer -->
<script>DrawFooter();</script>
</div>
</body>
</html>
SS_F;
echo $ssfooter;

?>