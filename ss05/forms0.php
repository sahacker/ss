<?php

function DrawHeader() {
	global $sshead0; global $sshead1; echo $sshead0; echo '<title>Simplex Server</title>'; echo $sshead1;
	echo '<body class="hold-transition skin-blue layout-boxed sidebar-mini"><div class="wrapper">';
}

function DrawTail() {
	echo '</div><script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script><script src="../../bootstrap/js/bootstrap.min.js">';
	echo '</script><script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>';
	echo '<script src="../../plugins/fastclick/fastclick.js"></script><script src="../../dist/js/app.min.js">';
	echo '</script><script src="../../dist/js/demo.js"></script></body></html>';
}

function NavbarBegin() {
	echo '<header class="main-header"><a href="../../index2.html" class="logo"><span class="logo-mini">SS</span>';
	echo '<span class="logo-lg"><b>Simplex Server</b></span></a><nav class="navbar navbar-static-top"><a href="#" ';
	echo 'class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>';
	echo '<div class="navbar-custom-menu"><ul class="nav navbar-nav">';
}

function NavbarEnd() { echo '</ul></div></nav></header>'; }

function DrawMail() {
	global $messages, $language;
	echo '<li class="dropdown messages-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>';
	echo '<span class="label label-success">'.$messages.'</span></a><ul class="dropdown-menu"><li class="header">';
	echo LMsg($language, 'mail_INFO').$messages;
	echo '</li><li><ul class="menu"><li><a href="#">';
// <!--  <div class="pull-left"><img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> </div> -->	
	echo '<h4>';
	echo 'Support Team';
	echo '<small><i class="fa fa-clock-o"></i>';
	echo '5 mins';
	echo '</small></h4><p>';
	echo ' Why not buy a new awesome theme?';
	echo '</p></a></li><!-- end message --></ul></li><li class="footer"><a href="#">';
	echo LMsg($language, 'mail_SHOW').'</a></li></ul></li>';
}

function DrawUser() { echo '<li><a href="#" data-toggle="control-sidebar"><i class="fa fa-user"></i></a></li>'; }

function DoName($bcrumb, $cid) { global $language;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.$bcrumb.'<small>'.LMsg($language, 'citem_VIEW').'</small></h1></section><section class="content">'; //исправить "свойства компании"
	echo '</section></div>';
};
function DoRequ($bcrumb, $cid) { global $language;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.$bcrumb.'<small>'.LMsg($language, 'citem_REQU').'</small></h1></section><section class="content">'; //исправить "свойства компании"
	echo '</section></div>';
};
function Budget($bcrumb, $cid) { global $language;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.$bcrumb.'<small>'.LMsg($language, 'citem_COIN').'</small></h1></section><section class="content">'; //исправить "свойства компании"
	echo '</section></div>';
};
function Office($bcrumb, $cid) { global $language, $conn;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.$bcrumb.'<small>'.LMsg($language, 'citem_FILI').'</small></h1></section><section class="content">'; //исправить "свойства компании"
	echo '<form action="index.php?act=office" method="post"><div class="group">';
	echo '<button type="submit" name="office" value="new" class="btn btn-success col-lg-3 col-md-4 col-sm-6 col-xs-12">'.LMsg($language, 'citem_NEWF').'</button>';
	echo '<button type="submit" name="office" value="chg" class="btn btn-default col-lg-3 col-md-4 col-sm-6 col-xs-12">'.LMsg($language, 'citem_CHGF').'</button>';
	echo '<button type="submit" name="office" value="def"  class="btn btn-danger col-lg-3 col-md-4 col-sm-6 col-xs-12">'.LMsg($language, 'citem_DELF').'</button>';
	echo '<button type="submit" name="office" value="del" class="btn btn-warning col-lg-3 col-md-4 col-sm-6 col-xs-12">'.LMsg($language, 'citem_DEFF').'</button>';
	echo '<input type="hidden" name="comp" value="'.$cid.'">';
	echo '</div><div class="clearfix"></div><div><h4>'.LMsg($language, 'citem_COMP').': '.CompanyAbbr($cid).'</h4></div><div class="table"><table class="table-condensed"><thead><tr>';
//	echo '<th>'.LMsg($language, 'oftab_NUM').'</th><th>'.LMsg($language, 'oftab_SEL').'</th><th>'.LMsg($language, 'oftab_NAME').'</th><th>'.LMsg($language, 'oftab_ADDR').'</th>';
//	echo '<th>'.LMsg($language, 'oftab_REG').'</th><th>'.LMsg($language, 'oftab_LAND').'</th><th>'.LMsg($language, 'oftab_IDX').'</th><th>'.LMsg($language, 'oftab_MAIN').'</th>'; 
	echo '<th>'.LMsg($language, 'oftab_NUM').'</th><th>'.LMsg($language, 'oftab_SEL').'</th><th>'.LMsg($language, 'oftab_MAIN').'</th><th>'.LMsg($language, 'oftab_NAME').'</th>';
	echo '</tr></thead><tbody>';

	$query = 'select bid,fname,address,region,country,postidx,deff from offices where cid="'.$cid.'"'; // $chk='stub';
	$relat = mysqli_query($conn, $query);
	$relnum = mysqli_num_rows($relat);
	if ($relnum == 0) { echo ''; } else for ($j = 1; $j <= $relnum; $j++) { $relrow = mysqli_fetch_assoc($relat); 
	$bid=$relrow['bid']; $fname=$relrow['fname']; $address=$relrow['address']; $region=$relrow['region']; $country=$relrow['country']; $postidx=$relrow['postidx']; $deff=$relrow['deff'];
		if ($deff==true) { $deft=LMsg($language, 'dlg_Y'); } else { $deft=LMsg($language, 'dlg_N'); };
		if ($j==1) {$chk='<input name="rbut" type="radio" value="'.$bid.'" checked>'; }
		else {$chk='<input name="rbut" type="radio" value="'.$bid.'">'; };
//	echo '<tr><th scope="row">'.$j.'</th><td>'.$chk.'</td><td>'.$fname.'</td><td>'.$address.'</td><td>'.$region.'</td><td>'.$country.'</td><td>'.$postidx.'</td><td>'.$deff.'</td></tr>';
	echo '<tr><th scope="row">'.$j.'</th><td>'.$chk.'</td><td>'.$deft.'</td><td>'.$fname.'</td></tr>';
	};
	echo '</tbody></table></div></form></section></div>';


};
function DoServ($bcrumb, $cid) { global $language;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.$bcrumb.'<small>'.LMsg($language, 'citem_SERV').'</small></h1></section><section class="content">'; //исправить "свойства компании"
	echo '</section></div>';
};

function DrawFooter() {
	echo '<footer class="main-footer"><div class="pull-right hidden-xs"><b>Version</b> 2.3.3</div>';
	echo '<strong>Copyright &copy; 2014-2017 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong>';
	echo ' All rights reserved.</footer>';
}

function DrawProfile() {
	global $language;
	echo '<li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">';
   if ($_SESSION['name'] == '') {
	echo '<img src="img/u16.png" alt="User Image"><span class="hidden-xs">'.LMsg($language, 'user_UREG').'</span></a>';
	echo '<ul class="dropdown-menu"><li class="user-header"><img src="img/user.png" alt="User Image"><p>';
	echo LMsg($language, 'user_UREG').'<small>'.LMsg($language, 'user_UMSG').'</small></p></li>';
	echo '<li class="user-footer">';
	echo '<div class="pull-left"><a href="index.php?act=register" class="btn btn-default btn-flat">'.LMsg($language, 'rmenu1_REG').'</a></div>';
	echo '<div class="pull-right"><a href="index.php?act=login" class="btn btn-default btn-flat">'.LMsg($language, 'rmenu1_LGN').'</a></div>';
   } else {
	$idtype=$_SESSION['idtype']; $grouptype = LMsg($language, $idtype); 
	echo '<img src="img/u16.png" alt="User Image"><span class="hidden-xs">'.$_SESSION['name'].'</span></a>'; 
	echo '<ul class="dropdown-menu"><li class="user-header"><img src="img/user.png" alt="User Image"><p>';
	echo $_SESSION['name'].'<small>'.$grouptype.'</small></p></li>';
	echo '<li class="user-footer">';
	echo '<div class="pull-left"><a href="index.php?act=profile" class="btn btn-default btn-flat">'.LMsg($language, 'lmenu_PROF').'</a></div>';
	echo '<div class="pull-right"><a href="index.php?act=logout" class="btn btn-default btn-flat">'.LMsg($language, 'rmenu1_LGT').'</a></div>';
   }
//	echo '<li class="user-body"><div class="row">';
//	echo '<div class="col-xs-4 text-center"><a href="#">Followers</a></div>';
//	echo '<div class="col-xs-4 text-center"><a href="#">Sales</a></div>';
//	echo '<div class="col-xs-4 text-center"><a href="#">Friends</a></div>';
//	echo '</div></li>';
	echo '</li></ul></li>';
}

function DrawControl() {
global $language;
	if ( $_SESSION['name']!='' ) { 
	echo '<aside class="control-sidebar control-sidebar-dark"><ul class="nav nav-tabs nav-justified control-sidebar-tabs"></ul>';
	echo '<div class="tab-content"><h4 class="control-sidebar-heading">';
	echo '<p><a href="index.php?act=updu" onclick="#">'.LMsg($language, 'lmenu_PROF').'</a></p>'; // Профиль
	echo '<p><a href="index.php?act=comp" onclick="#">'.LMsg($language,    'lmenu_COMP').'</a></p>'; // Компании
	echo '<p><a href="index.php?act=logout" onclick="#">'.LMsg($language,  'rmenu1_LGT').'</a></p>'; // Выход
	echo '</h4></div></aside><div class="control-sidebar-bg"></div>';
	} else {
		echo '<aside class="control-sidebar control-sidebar-dark"><ul class="nav nav-tabs nav-justified control-sidebar-tabs"></ul>';
		echo '<div class="tab-content"><h4 class="control-sidebar-heading"><a href="index.php?act=login" onclick="#">';
		echo LMsg($language, 'rmenu1_LGN').'</a></h4></div></aside><div class="control-sidebar-bg"></div>';
		};
}

function DrawLang() { global $language;
	echo '<li class="dropdown">';
	echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
	echo '<span id="lflag" class="lang-sm" lang="'.$language.'"><span class="caret"></span></a>';
	echo '<ul class="dropdown-menu" role="menu" aria-labelledby="menu1"><li role="presentation">';
	echo '<a role="menuitem" tabindex="-1" href="index.php?lang=ru"><span class="lang-sm lang-lbl" lang="ru"></span></a></li>';
	echo '<li role="presentation">';
	echo '<a role="menuitem" tabindex="-1" href="index.php?lang=en"><span class="lang-sm lang-lbl" lang="en"></span></a></li></ul></li>';
};


function OfficeHandler() { global $language; $office=POST['office']; $bid=POST['rbut']; $cid=POST['comp']; // Обработчик кнопок формы "Филиалы"
	switch ($office) {
	case 'new': Stub(); break; // Создать новый офис
	case 'chg': Stub(); break; // Изменить информацию офиса
	case 'def': Stub(); break; // Назначить офис главным
	case 'del': Stub(); break; // Удалить офис
	}
}

?>
