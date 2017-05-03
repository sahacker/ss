<?php //Функции меню


function CallSubMenu($uid, $gid) { global $language, $conn;

	$query = 'select cid from relations where uid="'.$uid.'" and gid="'.$gid.'"';
	$relat = mysqli_query($conn, $query);
	$relnum = mysqli_num_rows($relat);
	if ($relnum == 0) { echo ''; } else for ($j = 1; $j <= $relnum; $j++) {
		$relrow = mysqli_fetch_assoc($relat); $cid=$relrow['cid']; 

		echo '<li class="active treeview"><a href="#"><i class="fa fa-bars text-white"></i><span>'.CompanyAbbr($cid).'</span>';
		echo '<i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu">';
		echo '<li class="active"><a href="index.php?act=menu&do=name&cid='.$cid.'"><i class="fa fa-file-o text-orange"></i><span>'.LMsg($language, 'm1_NAME').'</span></a></li>';
		echo '<li class="active"><a href="index.php?act=menu&do=requ&cid='.$cid.'"><i class="fa fa-gear text-red">     </i><span>'.LMsg($language, 'm1_REQU').'</span></a></li>';
		echo '<li class="active"><a href="index.php?act=menu&do=budg&cid='.$cid.'"><i class="fa fa-dollar text-lime">  </i><span>'.LMsg($language, 'm1_COIN').'</span></a></li>';
		echo '<li class="active"><a href="index.php?act=menu&do=fili&cid='.$cid.'"><i class="fa fa-table text-grey">   </i><span>'.LMsg($language, 'm1_FILI').'</span></a></li>';
		echo '<li class="active"><a href="index.php?act=menu&do=serv&cid='.$cid.'"><i class="fa fa-briefcase text-yellow"></i><span>'.LMsg($language, 'm1_SERV').'</span></a></li>';
		echo '</ul></li>'; 
	}
};

function DrawMMenu() { global $language;
	echo '<aside class="main-sidebar"><section class="sidebar"><ul class="sidebar-menu"><li class="header">'.LMsg($language, 'mm_MAIN').'</li>';
//	echo LMsg($language, 'lmenu_MAIN').'</li>';
	echo '<li class="active"><a href="index.php?act=about"><i class="fa fa-life-ring text-red"></i><span>'.LMsg($language, 'citem_ABO').'</span></a></li>';
	echo '<li class="active"><a href="index.php?act=license"><i class="fa fa-info text-orange"></i><span>'.LMsg($language, 'citem_LIC').'</span></a></li>';
	echo '<li class="active"><a href="index.php?act=profile"><i class="fa fa-user-o text-grey"></i><span>'.LMsg($language, 'citem_PRO').'</span></a></li>';
	echo '<li class="active"><a href="index.php?act=newc"><i class="fa fa-asterisk text-blue"> </i><span>'.LMsg($language, 'citem_NEWC').'</span></a></li>';
	echo '</ul>';

    echo '';
};

function DrawMenu($nmenu) { global $language;
	switch ($nmenu) {
	case 1: echo '<ul class="sidebar-menu"><li class="header">'.LMsg($language, 'mm_OWNER').'</li>';  CallSubMenu(1, 1); break;
	case 2: echo '<ul class="sidebar-menu"><li class="header">'.LMsg($language, 'mm_ADMIN').'</li>';  CallSubMenu(1, 2); break;
	case 3: echo '<ul class="sidebar-menu"><li class="header">'.LMsg($language, 'mm_GUEST').'</li>';  CallSubMenu(1, 8); break; };
	echo '</ul>';
};

function DrawLeftMenu() { global $language;
DrawMMenu(); DrawMenu(1); DrawMenu(2); DrawMenu(3); echo '</ul></section></aside>'; }

function DrawWorkSpace($x) {
global $language;
	if ($x == 'about')
			{$br1 = LMsg($language, 'mitem_ABO'); $title = LMsg($language, 'mitem_ABO'); $info = LTxt($language, 'ABOUT'); $status = LMsg($language, 'mitem_FOOT'); }
		else    {$br1 = LMsg($language, 'mitem_DESC'); $title = LMsg($language, 'mitem_TITL'); $info = LTxt($language, 'LICENSE'); $status = LMsg($language, 'mitem_FOOT'); };
	echo '<div class="content-wrapper">';
	echo '<section class="content-header"><h1>';
	echo LMsg($language, 'mitem_MAIN').'<small>';
	echo $br1.'</small></h1></section>';
	echo '<section class="content"><div class="callout callout-info"><h4>';
	echo LMsg($language, 'mitem_TIPH').'</h4><p>'.LMsg($language, 'mitem_TIPI').'</p></div>';
	echo '<div class="box"><div class="box-header with-border"><h3 class="box-title">';
	echo $title.'</h3><div class="box-tools pull-right">';
	echo '<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>';
//	echo '<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>';
	echo '</div></div><div class="box-body">'.$info.'</div><div class="box-footer">';
	echo $status.'</div></div></section></div>';
}

function DrawUserProfile() { global $language;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.LMsg($language, 'mitem_MAIN').'<small>';
	echo LMsg($language, 'uitem_UPD').'</small></h1></section><section class="content">';
// draw profile here
	echo '</section></div>';
}

function DrawNewCompany() { global $language;
	echo '<div class="content-wrapper"><section class="content-header"><h1>'.LMsg($language, 'mitem_MAIN').'<small>';
	echo LMsg($language, 'citem_NEWC').'</small></h1></section><section class="content">';
// create new company here
	echo '</section></div>';
}

?>
