<?php

include_once 'cfg.php';
include_once 'consts.php';

$conn = new mysqli($host, $user, $password, $dbname);
if($conn->connect_errno) { echo "Не удалось подключиться к MySQL: " . $conn->connect_error; }

class tDB {
	public function Done() { $conn->close; }
	static function LMsg($tkey) { global $conn;
		$qry = 'select msg from msgstr where lang="'.$_SESSION['lang'].'" and typekey="'.$tkey.'"';
		$result = $conn->query($qry);
		$rowcnt = $result->num_rows;
		if ($rowcnt == 0) { echo 'No such string!'; } else { $row = $result->fetch_array(); $msg = $row[0]; return $msg; }
		$result->close();
		}
	static function Login($email) { global $conn;
		$qry='select uid,gid,fullname,name,surname,passwd,status from users where enabled="1" and email="'.$email.'"';
		$result = $conn->query($qry);
		$rowcnt = $result->num_rows;
		if ($rowcnt == 0) { header('location: index.php?act=login'); } else { $row = $result->fetch_array(); $msg = $row[0]; return $msg; }
		$result->close();
		}
	public function Sel() {}
	public function Ins() {}
	public function Upd() {}
	public function Del() {}
};
$MyDB = new tDB;

class tUser {
	private $uid, $gid, $fname, $sname, $pass;
	public $login, $fullname, $mail;
	public function Start() {
		session_start();
		$login = (isset($_SESSION['user']) ? $_SESSION['user'] : '');
		if ($login !='') { $fullname = $_SESSION['name']; $mail = $_SESSION['user']; }
		}
	public function SetAll($suid, $sgid, $n0, $n1, $n2, $mx, $pw) {}
	public function Register() {}
	public function Login($mx, $pw) {}
	public function Logout() {
	    session_start();
	    $_SESSION['idtype']='';
	    $_SESSION['role']='';
	    $_SESSION['name']='';
	    $_SESSION['user']='';
	    header('location: index.php');
            }
};
$User = new tUser;

class tInterface {
	public $language;
	public function SessionReset() {
		global $User;
		$User->Start();
		if (!empty($_GET['lang'])) { $language = $_GET['lang']; $_SESSION['lang'] = $language; } else {
			if (!empty($_SESSION['lang'])) { $language = $_SESSION['lang'];
				} else { $language = 'ru'; $_SESSION['lang'] = $language; }
			}
		}
	public function Draw() { global $User, $MyDB;
	$action = (isset($_GET['act']) ? $_GET['act'] : 0);
		switch($action) {
			case "":         DrawWork(""); break;
			case "login":    DrawLogin(); break;
			case "register": DrawRegister(); break;
			case "remind": 	 DrawRemind(); break;
			case "success":  DrawSuccess(); break;
			case "logout":   $User::logout(); break;
			case "e404":     DrawWork("e404"); break;
			case "e500":     DrawWork("e500"); break;
			case "xlog":     MyAct(); break;
	        }
	}
};
$Iface = new tInterface;

/*

function MyAct() {
$action = $_POST['act'];
switch($action) {
    case "login":
	echo "";
    	$email = $_POST['email'];
    	$xpass = $_POST['password'];
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


*/
?>