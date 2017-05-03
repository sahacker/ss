<?php

    $email = $_POST['email'];
    $xpass = $_POST['password'];

include 'cfg.php';

    $conn = @mysql_connect ($host, $user, $password, $db);
    if (!$conn) { mysql_close($conn); header('location: index.php?act=6'); }
	$query='select uid,status,surname,name,passwd from users where enabled=true and email="'.$email.'"';
	$result = mysql_query($conn, $query);
        $rowcnt = mysql_num_rows($result);
    if ($rowcnt == 0) { mysql_close($conn); header('location: index.php?act=6'); } else {
	 $row = mysql_fetch_assoc($result);
	 $uid     = $row['uid'];
	 $status  = $row['status'];
	 $surname = $row['surname'];
	 $nname   = $row['name'];
	 $zpass   = $row['passwd'];
	 $fname   = $surname.' '.$nname;
	 mysql_close($conn);
    if ($zpass == $xpass) {
	session_start();
	$_SESSION['user'] = $email;
	$_SESSION['uid']  = $uid;
	$_SESSION['role'] = $status;
	$_SESSION['name'] = $fname;
	header('location: index.php?act=9');
    } else { header('location: index.php?act=6'); };
//    } else { echo $uid.' '.$email.' '.$status.' '.$fname; };
    };

?>