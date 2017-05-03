<?php

function e404 () {
	global $language;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.LMsg($language, 'error_t404').'</h1></section>';
	//	echo '<ol class="breadcrumb"><li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>';
	//	echo '<li><a href="#">Examples</a></li><li class="active">404 error</li></ol>';
	echo '<section class="content"><div class="error-page"><h2 class="headline text-yellow"> 404</h2>';
	echo '<div class="error-content"><h3><i class="fa fa-warning text-yellow"></i> '.LMsg($language, 'error_f404').'</h3>';
	echo '<p>'.LMsg($language, 'error_c404').'<a href="/index.php">'.LMsg($language, 'error_c4041').'</a>';
	echo LMsg($language, 'error_c4042').'</p><form class="search-form"><div class="input-group">';
	echo '<input type="text" name="search" class="form-control" placeholder="Search">';
	echo '<div class="input-group-btn"><button type="submit" name="submit" class="btn btn-warning btn-flat">';
	echo '<i class="fa fa-search"></i></button></div></div></form></div></div></section></div>';
}
function e500 () {
	global $language;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.LMsg($language, 'error_t500').'</h1></section>';
	echo '<section class="content"><div class="error-page"><h2 class="headline text-red">500</h2>';
	echo '<div class="error-content"><h3><i class="fa fa-warning text-red"></i> '.LMsg($language, 'error_f500').'</h3>';
	echo '<p>'.LMsg($language, 'error_c500').'<a href="/index.php">'.LMsg($language, 'error_c4041').'</a>'.LMsg($language, 'error_c4042').'</p>';
	echo '<form class="search-form"><div class="input-group"><input type="text" name="search" class="form-control" placeholder="Search">';
	echo '<div class="input-group-btn"><button type="submit" name="submit" class="btn btn-danger btn-flat"><i class="fa fa-search"></i></button>';
	echo '</div></div></form></div></div></section></div>';
}

function DrawLogin() {
	global $language; global $sstail; DrawHeadT(0,'',LMsg($language,form_LGN));
//	echo $sshead0;	echo '<title>Simplex Server | '.LMsg($language, 'form_LGN').'</title>';	echo $sshead1;
	echo '<body class="hold-transition login-page"><div class="login-box"><div class="login-logo">';
	echo '<a href="https://ss.jbr.su"><b>Simplex </b>Server</a></div><div class="login-box-body">';
	echo '<p class="login-box-msg">'.LMsg($language, 'login_FORM').'</p>';
	echo '<form action="index.php?act=xlog" method="post"><div class="form-group has-feedback"><input type="hidden" name="act" value="login"><input type="email" name="email" class="form-control" placeholder="'.LMsg($language, 'placeh_MAIL').'">';
	echo '<span class="glyphicon glyphicon-envelope form-control-feedback"></span></div><div class="form-group has-feedback">';
	echo '<input type="password" name="password" class="form-control" placeholder="'.LMsg($language, 'placeh_PASS').'"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div>';
	echo '<div class="row"><div class="col-xs-8"><div class="checkbox icheck"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox">'.LMsg($language, 'login_REME').'</label></div></div><div class="col-xs-4">';
	echo '<button type="submit" class="btn btn-primary btn-block btn-flat">'.LMsg($language, 'rmenu1_LGN').'</button></div></div></form>';
	echo '<a href="index.php?act=remind">'.LMsg($language, 'login_FORG').'</a><br>';
	echo '<a href="index.php?act=register" class="text-center">'.LMsg($language, 'login_NREG').'</a></div></div>';
	echo $sstail;
}

function DrawRegister() {
	global $language; global $sstail; DrawHeadT(0,'',LMsg($language,form_REG));
//	global $language; global $sstail; global $sshead0; global $sshead1;
//	echo $sshead0; echo '<title>Simplex Server | '.LMsg($language, 'form_REG').'</title>'; echo $sshead1;
	echo '<body class="hold-transition register-page"><div class="register-box"><div class="register-logo">';
	echo '<a href="https://ss.jbr.su"><b>Simplex </b>Server</a></div><div class="register-box-body"><p class="login-box-msg">'.LMsg($language, 'login_NREG').'</p>';
	echo '<form action="index.php" method="post"><div class="form-group has-feedback"><input type="text" class="form-control" placeholder="'.LMsg($language, 'placeh_NAME').'">';
	echo '<span class="glyphicon glyphicon-user form-control-feedback"></span></div><div class="form-group has-feedback">';
	//	echo '<div class="form-group has-feedback"><input type="text" class="form-control" placeholder="'.LMsg($language, 'placeh_N1').'">';
	//	echo '<span class="glyphicon glyphicon-user form-control-feedback"></span></div><div class="form-group has-feedback">';
	echo '<input type="email" class="form-control" placeholder="'.LMsg($language, 'placeh_MAIL').'"><span class="glyphicon glyphicon-envelope form-control-feedback"></span></div>';
	echo '<div class="form-group has-feedback"><input type="password" class="form-control" placeholder="'.LMsg($language, 'placeh_PASS').'">';
	echo '<span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="form-group has-feedback">';
	echo '<input type="password" class="form-control" placeholder="'.LMsg($language, 'placeh_PASA').'"><span class="glyphicon glyphicon-log-in form-control-feedback"></span></div>';
	echo '<div class="row"><div class="col-xs-7"><div class="checkbox icheck"><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox"> '.LMsg($language, 'login_CASE').'<a href="#">'.LMsg($language, 'login_TERM').'</a></label></div></div>';
	echo '<div class="col-xs-5"><button type="submit" class="btn btn-primary btn-block btn-flat" disabled>'.LMsg($language, 'rmenu1_REG').'</button></div></div></form>';
	echo '<a href="index.php?act=login" class="text-center">'.LMsg($language, 'login_AREG').'</a></div></div>';
	echo $sstail;
}

function DrawRemind() {
	global $language; global $sstail; DrawHeadT(0,'',LMsg($language,form_REM));
	echo '<body class="hold-transition login-page"><div class="login-box"><div class="login-logo">';
	echo '<a href="https://ss.jbr.su"><b>Simplex </b>Server</a></div><div class="login-box-body">';
	echo '<p class="login-box-msg">'.LMsg($language, 'login_REMI').'</p>';
	echo '<form action="index.php" method="post"><div class="form-group has-feedback">';
	echo '<input type="email" class="form-control" placeholder="'.LMsg($language, 'placeh_MAIL').'"></div>';
	echo '<div class="row"><div class="col-xs-6"></div><div class="col-xs-6">';
	echo '<button type="submit" class="btn btn-primary btn-block btn-flat" disabled>';
	echo LMsg($language, 'rmenu1_REM').'</button></div></div></form></div></div>'; echo $sstail;
}

function DrawSuccess() {
	global $language; global $sstail; DrawHeadT(10,'index.php?act=login',LMsg($language,form_SUC));
	echo '<body class="hold-transition login-page"><div class="login-box"><div class="login-logo">';
	echo '<a href="https://ss.jbr.su"><b>Simplex </b>Server</a></div><div class="login-box-body">';
	echo '<p align="justify">'.LMsg($language, 'login_CONG').'</p>';
	echo '<p align="justify">'.LMsg($language, 'login_CHK1').'</p>';
	echo '<p align="justify">'.LMsg($language, 'login_SUCC').'</p>';
	echo '<a href="index.php?act=login" class="text-center">'.LMsg($language, 'login_FNOW').'</a>';
	echo '</div></div>'; echo $sstail;
}


function DrawFailed() {
	global $language; global $sstail; DrawHeadT(10,'index.php?act=login',LMsg($language,form_FAIL));
	echo '<body class="hold-transition login-page"><div class="login-box"><div class="login-logo">';
	echo '<a href="https://ss.jbr.su"><b>Simplex </b>Server</a></div><div class="login-box-body">';
	echo '<p align="justify">'.LMsg($language, 'login_FAIL').'</p>';
//	echo '<p align="justify">'.LMsg($language, 'login_CHK1').'</p>';
	echo '<p align="justify">'.LMsg($language, 'login_SUCC').'</p>';
	echo '<a href="index.php?act=login" class="text-center">'.LMsg($language, 'login_FNOW').'</a>';
	echo '</div></div>'; echo $sstail;
}

function UpdateProfile() {
global $language, $conn;
	if ( $_SESSION['name']!='' ) { 
	echo '<div class="content-wrapper">';
	echo '<section class="content-header"><h1>';
	echo LMsg($language, 'uitem_USER').'<small>';
	echo LMsg($language, 'uitem_UPD').'</small></h1></section><section class="content">';
		$uid=$_SESSION['uid'];
	echo '</section></div>'; } else { header('location: index.php?act=login'); };
};

function MyMenu() { global $language; $do = $_GET [ 'do' ]; $cid = $_GET [ 'cid' ];
	DrawHeader(); NavbarBegin(); DrawProfile(); DrawMail(); DrawLang(); DrawUser(); NavbarEnd(); DrawLeftMenu(); $bcrumb = LMsg($language, 'citem_COMP');
	switch ($do) {
		case 'name': DoName($bcrumb, $cid); break;
		case 'requ': DoRequ($bcrumb, $cid); break;
		case 'budg': Budget($bcrumb, $cid); break;
		case 'fili': Office($bcrumb, $cid); break;
		case 'serv': DoServ($bcrumb, $cid); break;
		default: e404(); break;
	}
	DrawFooter(); DrawControl(); DrawTail();
};

function DrawWork($wpage) {
	DrawHeader(); NavbarBegin(); DrawProfile(); DrawMail(); DrawLang(); DrawUser(); NavbarEnd(); DrawLeftMenu();
	switch ($wpage) {
		case 'e404': e404(); break;
		case 'e500': e500(); break;
		case 'profile': DrawUserProfile(); break;
		case 'newc': DrawNewCompany(); break;
//		case 'updu': UpdateProfile(); break;
//		case 'comp': DrawCompanies(); break;
//		case 'newc': CreateCompany(); break;
//		case 'delc': RemoveCompany(); break;
//		case 'updc': UpdateCompany(); break;

// if ($act == 'menu' ) {  MyMenu(); } else

		case 'about':   DrawWorkSpace($wpage); break;
		default: DrawWorkSpace(''); break;
	}
	DrawFooter(); DrawControl(); DrawTail();
}

?>


