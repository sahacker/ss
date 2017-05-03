<?php
$conn = @mysqli_connect ($host, $user, $password, $db);
//if (!$conn) { mysqli_close($conn); echo 'Not connect with DB!';
// header('location: index.php?act=error');
//}

function  LMsg($lang, $tkey) {
	global $conn;
	//	$conn = mysqli_connect($host, $user, $password, $db);
	if (!$conn) { mysqli_close($conn); echo 'Not connect with DB!'; } else {
		$query = 'select msg from msgstr where lang="'.$lang.'" and typekey="'.$tkey.'"';
		$result = mysqli_query($conn, $query);
		$rowcnt = mysqli_num_rows($result);
		if ($rowcnt == 0) {
			//			mysqli_close($conn);
			echo 'No such string!'; } else {
				$row = mysqli_fetch_assoc($result);
				$msg = $row['msg'];
				//		mysqli_close($conn);
				return $msg; }; };
}

function  LTxt($lang, $tkey) {
	global $conn;
	//	$conn = mysqli_connect($host, $user, $password, $db);
	if (!$conn) { mysqli_close($conn); echo 'Not connect with DB!'; } else {
		$query = 'select msg from msgtxt where lang="'.$lang.'" and typekey="'.$tkey.'"';
		$result = mysqli_query($conn, $query);
		$rowcnt = mysqli_num_rows($result);
		if ($rowcnt == 0) {
			//			mysqli_close($conn);
			echo 'No such string!'; } else {
				$row = mysqli_fetch_assoc($result);
				$msg = $row['msg'];
				//		mysqli_close($conn);
				return $msg; }; };
}

function  GetRules($group) {
	global $conn;
	//	$conn = mysqli_connect($host, $user, $password, $db);
	if (!$conn) { mysqli_close($conn); echo 'Not connect with DB!'; } else {
		$query = 'select rules from group where gid="'.$group.'"';
		$result = mysqli_query($conn, $query);
		$rowcnt = mysqli_num_rows($result);
		if ($rowcnt == 0) {
			//			mysqli_close($conn);
			echo 'No such string!'; } else {
				$row = mysqli_fetch_assoc($result);
				$rules = $row['rules'];
				return $rules; }; };
}


function  CompanyAbbr($cid) {
	global $conn;
	//	$conn = mysqli_connect($host, $user, $password, $db);
	if (!$conn) { mysqli_close($conn); echo 'Not connect with DB!'; } else {
		$query = 'select abbr from companies where cid="'.$cid.'"';
		$result = mysqli_query($conn, $query);
		$rowcnt = mysqli_num_rows($result);
		if ($rowcnt == 0) {
			//			mysqli_close($conn);
			echo 'No such string!'; } else {
				$row = mysqli_fetch_assoc($result);
				$abbr = $row['abbr'];
				//		mysqli_close($conn);
				return $abbr; }; };
}


function Logout() {
	    session_start();
	    $_SESSION['idtype']='';
	    $_SESSION['role']='';
	    $_SESSION['name']='';
	    $_SESSION['user']='';
	    header('location: index.php');
};

function MyAct() {
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
SSTAIL;

function DrawHeadT($delay, $redirect, $title) {
	global $sshead0, $sshead1;
	echo $sshead0;
	if ($delay<>0) echo '<meta http-equiv="refresh" content="'.$delay.';'.$redirect.'">';
	if ($title == '') { echo '<title>Simplex Server</title>'; } else { echo '<title>Simplex Server | '.$title.'</title>'; };
	echo $sshead1;
}

function Stub() {};

?>