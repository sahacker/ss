<?php
$sshead0 = <<<SSHEAD0
<!DOCTYPE html><html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
SSHEAD0;
$sshead1 = <<<SSHEAD1
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/languages.min.css">
<link rel="stylesheet" href="font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="ss.css"></head>
SSHEAD1;
/*
$sstail = <<<SSTAIL
<script src="ss.js"></script>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script><script>
$(function () {
("input").iCheck({
		checkboxClass: "icheckbox_square-blue",
		radioClass: "iradio_square-blue",
		increaseArea: "20%" // optional
		});
	});
</script></body></html>
SSTAIL; */
$sstail = <<<SSTAIL
</div><script src="plugins/jQuery/jQuery-2.2.0.min.js"></script><script src="bootstrap/js/bootstrap.min.js">
</script><script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script><script src="dist/js/app.min.js">
</script><script src="dist/js/demo.js"></script></body></html>
SSTAIL;
$ssfooter = <<<SSFOOTER
<footer class="main-footer"><div class="pull-right hidden-xs"><b>Version</b> 2.3.3</div>
<strong>Copyright &copy; 2014-2017 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.</footer>
SSFOOTER;
$sslng0 = <<<SSLNG0
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
SSLNG0;
$sslng1 = <<<SSLNG1
<span class="caret"></span></a><ul class="dropdown-menu" role="menu" aria-labelledby="menu1"><li role="presentation">
<a role="menuitem" tabindex="-1" href="index.php?lang=ru"><span class="lang-sm lang-lbl" lang="ru"></span></a></li><li role="presentation">
<a role="menuitem" tabindex="-1" href="index.php?lang=en"><span class="lang-sm lang-lbl" lang="en"></span></a></li></ul></li>
SSLNG1;
$ssnbeg = <<<SSNBEG
<header class="main-header"><a href="../../index2.html" class="logo"><span class="logo-mini">SS</span><span class="logo-lg"><b>
Simplex Server</b></span></a><nav class="navbar navbar-static-top"><a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
<span class="sr-only">Toggle navigation</span></a><div class="navbar-custom-menu"><ul class="nav navbar-nav">
SSNBEG;

function DrawHeader() { global $sshead0, $sshead1; echo $sshead0.'<title>Simplex Server</title>'.$sshead1;
	echo '<body class="hold-transition skin-blue layout-boxed sidebar-mini"><div class="wrapper">'; }
function DrawFooter() { global $ssfooter; echo $ssfooter; }
function DrawTail() {  global $sstail; echo $sstail; }
function NavbarBegin() { global $ssnbeg; echo $ssnbeg; }
function NavbarEnd() { echo '</ul></div></nav></header>'; }
function DrawUser() { echo '<li><a href="#" data-toggle="control-sidebar"><i class="fa fa-user"></i></a></li>'; }
function DrawLang() { global $sslng0, $sslng1; echo $sslng0.'<span id="lflag" class="lang-sm" lang="'.$_SESSION['lang'].'">'.$sslng1; };
function DrawHeadT($delay, $redirect, $title) { global $sshead0, $sshead1; echo $sshead0; if ($delay<>0)
	echo '<meta http-equiv="refresh" content="'.$delay.';'.$redirect.'">'; 	if ($title == '') {
	echo '<title>Simplex Server</title>'; } else { echo '<title>Simplex Server | '.$title.'</title>'; }; echo $sshead1; }


function DrawMail($msg) { global $MyDB; echo '<li class="dropdown messages-menu">';
	echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>';
	echo '<span class="label label-success">'.$msg.'</span></a><ul class="dropdown-menu"><li class="header">';
	echo $MyDB::LMsg('mail_INFO').$msg.'</li><li><ul class="menu"><li><a href="#">';
// <!--  <div class="pull-left"><img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> </div> -->	
	echo '<h4>';
	echo 'Support Team';
	echo '<small><i class="fa fa-clock-o"></i>';
	echo '5 mins';
	echo '</small></h4><p>';
	echo ' Why not buy a new awesome theme?';
	echo '</p></a></li><!-- end message --></ul></li><li class="footer"><a href="#">';
	echo $MyDB::LMsg('mail_SHOW').'</a></li></ul></li>'; }

function DrawLeftMenu() { global $MyDB; echo '<aside class="main-sidebar"><section class="sidebar">';
	echo '<ul class="sidebar-menu"><li class="header">'.$MyDB::LMsg('menu_MAIN').'</li></ul></section></aside>';}

function DrawControl() { global $MyDB;
	if ( $_SESSION['name']!='' ) { 
	echo '<aside class="control-sidebar control-sidebar-dark"><ul class="nav nav-tabs nav-justified control-sidebar-tabs"></ul>';
	echo '<div class="tab-content"><h4 class="control-sidebar-heading">';
	echo '<p><a href="index.php?act=updu" onclick="#">'.$MyDB::LMsg('menu_PROF').'</a></p>'; // Профиль
	echo '<p><a href="index.php?act=comp" onclick="#">'.$MyDB::LMsg('menu_COMP').'</a></p>'; // Компании
	echo '<p><a href="index.php?act=logout" onclick="#">'.$MyDB::LMsg('menu_LGT').'</a></p>'; // Выход
	echo '</h4></div></aside><div class="control-sidebar-bg"></div>';
	} else {
		echo '<aside class="control-sidebar control-sidebar-dark"><ul class="nav nav-tabs nav-justified control-sidebar-tabs"></ul>';
		echo '<div class="tab-content"><h4 class="control-sidebar-heading"><a href="index.php?act=login" onclick="#">';
		echo $MyDB::LMsg('menu_LGN').'</a></h4></div></aside><div class="control-sidebar-bg"></div>';
		};
}

function DrawWorkSpace() { global $MyDB;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.$MyDB::LMsg('bread0_MAIN').'<small>';
	echo $MyDB::LMsg('bread1_MAIN').'</small></h1></section><section class="content"><div class="callout callout-info"><h4>';
	echo $MyDB::LMsg('win_TIPH').'</h4><p>'.$MyDB::LMsg('win_TIPI').'</p></div><div class="box"><div class="box-header with-border">';
	echo '<h3 class="box-title">'.$MyDB::LMsg('win_TITL').'</h3><div class="box-tools pull-right">';
	echo '<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>';
//	echo '<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>';
	echo '</div></div><div class="box-body">'.$MyDB::LMsg('win_TAPP').'</div><div class="box-footer">'.$MyDB::LMsg('win_FOOT');
	echo '</div></div></section></div>';
}

function DrawProfile() { global $MyDB;
	echo '<li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">';
   if ($_SESSION['name'] == '') {
	echo '<img src="img/u16.png" alt="User Image"><span class="hidden-xs">'.$MyDB::LMsg('user_UREG').'</span></a>';
	echo '<ul class="dropdown-menu"><li class="user-header"><img src="img/user.png" alt="User Image"><p>';
	echo $MyDB::LMsg('user_UREG').'<small>'.$MyDB::LMsg('user_UMSG').'</small></p></li>';
	echo '<li class="user-footer">';
	echo '<div class="pull-left"><a href="index.php?act=register" class="btn btn-default btn-flat">'.$MyDB::LMsg('menu_REG').'</a></div>';
	echo '<div class="pull-right"><a href="index.php?act=login" class="btn btn-default btn-flat">'.$MyDB::LMsg('menu_LGN').'</a></div>';
   } else {
	$idtype=$_SESSION['idtype']; $grouptype = $MyDB::LMsg($idtype); 
	echo '<img src="img/u16.png" alt="User Image"><span class="hidden-xs">'.$_SESSION['name'].'</span></a>'; 
	echo '<ul class="dropdown-menu"><li class="user-header"><img src="img/user.png" alt="User Image"><p>';
	echo $_SESSION['name'].'<small>'.$grouptype.'</small></p></li>';
	echo '<li class="user-footer">';
	echo '<div class="pull-left"><a href="index.php?act=profile" class="btn btn-default btn-flat">'.$MyDB::LMsg('menu_PROF').'</a></div>';
	echo '<div class="pull-right"><a href="index.php?act=logout" class="btn btn-default btn-flat">'.$MyDB::LMsg('menu_LGT').'</a></div>';
   }
//	echo '<li class="user-body"><div class="row">';
//	echo '<div class="col-xs-4 text-center"><a href="#">Followers</a></div>';
//	echo '<div class="col-xs-4 text-center"><a href="#">Sales</a></div>';
//	echo '<div class="col-xs-4 text-center"><a href="#">Friends</a></div>';
//	echo '</div></li>';
	echo '</li></ul></li>';
}

function DrawLogin() { global $MyDB, $sstail; DrawHeadT(0,'',$MyDB::LMsg('form_LGN'));
//	echo $sshead0;	echo '<title>Simplex Server | '.$MyDB::LMsg('form_LGN').'</title>';	echo $sshead1;
	echo '<body class="hold-transition login-page"><div class="login-box"><div class="login-logo">';
	echo '<a href="https://ss.jbr.su"><b>Simplex </b>Server</a></div><div class="login-box-body">';
	echo '<p class="login-box-msg">'.$MyDB::LMsg('login_FORM').'</p>';
	echo '<form action="index.php?act=xlog" method="post"><div class="form-group has-feedback"><input type="hidden" name="act" value="login"><input type="email" name="email" class="form-control" placeholder="'.$MyDB::LMsg('placeh_MAIL').'">';
	echo '<span class="glyphicon glyphicon-envelope form-control-feedback"></span></div><div class="form-group has-feedback">';
	echo '<input type="password" name="password" class="form-control" placeholder="'.$MyDB::LMsg('placeh_PASS').'"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div>';
	echo '<div class="row"><div class="col-xs-8"><div class="checkbox icheck"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox">'.$MyDB::LMsg('login_REME').'</label></div></div><div class="col-xs-4">';
	echo '<button type="submit" class="btn btn-primary btn-block btn-flat">'.$MyDB::LMsg('menu_LGN').'</button></div></div></form>';
	echo '<a href="index.php?act=remind">'.$MyDB::LMsg('login_FORG').'</a><br>';
	echo '<a href="index.php?act=register" class="text-center">'.$MyDB::LMsg('login_NREG').'</a></div></div>';
	echo $sstail;
}

function DrawRegister() { global $MyDB, $sstail; DrawHeadT(0,'',$MyDB::LMsg('form_REG'));
//	global $language; global $sstail; global $sshead0; global $sshead1;
//	echo $sshead0; echo '<title>Simplex Server | '.$MyDB::LMsg('form_REG').'</title>'; echo $sshead1;
	echo '<body class="hold-transition register-page"><div class="register-box"><div class="register-logo">';
	echo '<a href="https://ss.jbr.su"><b>Simplex </b>Server</a></div><div class="register-box-body"><p class="login-box-msg">'.$MyDB::LMsg('login_NREG').'</p>';
	echo '<form action="index.php" method="post"><div class="form-group has-feedback"><input type="text" class="form-control" placeholder="'.$MyDB::LMsg('placeh_N2').'">';
	echo '<span class="glyphicon glyphicon-user form-control-feedback"></span></div><div class="form-group has-feedback">';
	echo '<div class="form-group has-feedback"><input type="text" class="form-control" placeholder="'.$MyDB::LMsg('placeh_N1').'">';
	echo '<span class="glyphicon glyphicon-user form-control-feedback"></span></div><div class="form-group has-feedback">';
	echo '<input type="email" class="form-control" placeholder="'.$MyDB::LMsg('placeh_MAIL').'"><span class="glyphicon glyphicon-envelope form-control-feedback"></span></div>';
	echo '<div class="form-group has-feedback"><input type="password" class="form-control" placeholder="'.$MyDB::LMsg('placeh_PASS').'">';
	echo '<span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="form-group has-feedback">';
	echo '<input type="password" class="form-control" placeholder="'.$MyDB::LMsg('placeh_PASA').'"><span class="glyphicon glyphicon-log-in form-control-feedback"></span></div>';
	echo '<div class="row"><div class="col-xs-7"><div class="checkbox icheck"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox"> '.$MyDB::LMsg('login_CASE').'<a href="#">'.$MyDB::LMsg('login_TERM').'</a></label></div></div>';
	echo '<div class="col-xs-5"><button type="submit" class="btn btn-primary btn-block btn-flat" disabled>'.$MyDB::LMsg('menu_REG').'</button></div></div></form>';
	echo '<a href="index.php?act=login" class="text-center">'.$MyDB::LMsg('login_AREG').'</a></div></div>';
	echo $sstail;
}

function DrawRemind() { global $MyDB, $sstail; DrawHeadT(0,'',$MyDB::LMsg('form_REM'));
	echo '<body class="hold-transition login-page"><div class="login-box"><div class="login-logo">';
	echo '<a href="https://ss.jbr.su"><b>Simplex </b>Server</a></div><div class="login-box-body">';
	echo '<p class="login-box-msg">'.$MyDB::LMsg('login_REMI').'</p>';
	echo '<form action="index.php" method="post"><div class="form-group has-feedback">';
	echo '<input type="email" class="form-control" placeholder="'.$MyDB::LMsg('placeh_MAIL').'"></div>';
	echo '<div class="row"><div class="col-xs-6"></div><div class="col-xs-6">';
	echo '<button type="submit" class="btn btn-primary btn-block btn-flat" disabled>';
	echo $MyDB::LMsg('menu_REM').'</button></div></div></form></div></div>'; echo $sstail;
}

function DrawSuccess() { global $MyDB, $sstail; DrawHeadT(10,'index.php?act=login',$MyDB::LMsg('form_SUC'));
	echo '<body class="hold-transition login-page"><div class="login-box"><div class="login-logo">';
	echo '<a href="https://ss.jbr.su"><b>Simplex </b>Server</a></div><div class="login-box-body">';
	echo '<p align="justify">'.$MyDB::LMsg('login_CONG').'</p>';
	echo '<p align="justify">'.$MyDB::LMsg('login_CHK1').'</p>';
	echo '<p align="justify">'.$MyDB::LMsg('login_SUCC').'</p>';
	echo '<a href="index.php?act=login" class="text-center">'.$MyDB::LMsg('login_FNOW').'</a>';
	echo '</div></div>'; echo $sstail;
}


function e404 () { global $MyDB;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.$MyDB::LMsg('error_t404').'</h1></section>';
	//	echo '<ol class="breadcrumb"><li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>';
	//	echo '<li><a href="#">Examples</a></li><li class="active">404 error</li></ol>';
	echo '<section class="content"><div class="error-page"><h2 class="headline text-yellow"> 404</h2>';
	echo '<div class="error-content"><h3><i class="fa fa-warning text-yellow"></i> '.$MyDB::LMsg('error_f404').'</h3>';
	echo '<p>'.$MyDB::LMsg('error_c404').'<a href="/index.php">'.$MyDB::LMsg('error_c4041').'</a>';
	echo $MyDB::LMsg('error_c4042').'</p><form class="search-form"><div class="input-group">';
	echo '<input type="text" name="search" class="form-control" placeholder="Search">';
	echo '<div class="input-group-btn"><button type="submit" name="submit" class="btn btn-warning btn-flat">';
	echo '<i class="fa fa-search"></i></button></div></div></form></div></div></section></div>';
}
function e500 () { global $MyDB;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.$MyDB::LMsg('error_t500').'</h1></section>';
	echo '<section class="content"><div class="error-page"><h2 class="headline text-red">500</h2>';
	echo '<div class="error-content"><h3><i class="fa fa-warning text-red"></i> '.$MyDB::LMsg('error_f500').'</h3>';
	echo '<p>'.$MyDB::LMsg('error_c500').'<a href="/index.php">'.$MyDB::LMsg('error_c4041').'</a>'.$MyDB::LMsg('error_c4042').'</p>';
	echo '<form class="search-form"><div class="input-group"><input type="text" name="search" class="form-control" placeholder="Search">';
	echo '<div class="input-group-btn"><button type="submit" name="submit" class="btn btn-danger btn-flat"><i class="fa fa-search"></i></button>';
	echo '</div></div></form></div></div></section></div>';
}


function DrawWork($wpage) {
	DrawHeader(); NavbarBegin(); DrawProfile(); DrawMail(0); DrawLang(); DrawUser(); NavbarEnd(); DrawLeftMenu();
	switch ($wpage) {
		case 'e404': e404(); break;
		case 'e500': e500(); break;
//		case 'updu': UpdateProfile(); break;
//		case 'comp': DrawCompanies(); break;
//		case 'newc': CreateCompany(); break;
//		case 'delc': RemoveCompany(); break;
//		case 'updc': UpdateCompany(); break;
		default: DrawWorkSpace(); break;
	} DrawFooter(); DrawControl(); DrawTail(); }

function MyAct() { global $User;
$action = $_POST['act'];
switch($action) {
    case "login":
	echo "";
//    echo "<!DOCTYPE html><html><head></head><body>LOGIN - it work!</body><html>";
    	$email = $_POST['email'];
    	$xpass = $_POST['password'];
//    echo 'email = "'.$email.'" password = "'.$xpass.'"';
	global $conn;
	$query='select uid,status,fullname,surname,name,passwd from users where enabled="1" and email="'.$email.'"';
	$result = mysqli_query($conn, $query); 
        $rowcnt = mysqli_num_rows($result);
    if ($rowcnt == 0) { header('location: index.php?act=login'); } else {
	 $row = mysqli_fetch_assoc($result);
	 $uid     = $row['uid'];
	 $status  = $row['status'];
	 $surname = $row['surname'];
	 $nname   = $row['name'];
	 $zpass   = $row['passwd'];
	 $fname   = $row['fullname'];;
	echo 'uid='.$uid.' status='.$status.' fullname='.$fname.' password='.$zpass.''; 
    if ($zpass == $xpass) {
	session_start();
	$_SESSION['user'] = $email;
	$_SESSION['uid']  = $uid;
	$_SESSION['role'] = $status;
	$_SESSION['name'] = $fname;
	$query='select idtype from groups where gid="'.$status.'"';
	$result = mysqli_query($conn, $query);
	$rowcnt = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
	$idtype = $row['idtype'];
	$_SESSION['idtype'] = $idtype;
	header('location: index.php');
      } else { header('location: index.php?act=login'); };
	};
    break;
//    case "logout":
//    break;
    case "register":
	echo "";
    break;
    case "activate":
	echo "";
    break;
    default:
    echo "<!DOCTYPE html><html><head></head><body>It doesn`t work!</body><html>";
	}
};

?>