<?php

include 'cfg.php';

    $conn = @mysql_connect ($host, $user, $password, $db);
    if (!$conn) { mysql_close($conn); header('location: index.php?act=2'); }

    $code = $_GET [ 'code' ];
        $query = 'select uid from unaccts where salt="'.$code.'"';
        $result = mysql_query($conn, $query);
        $rowcnt = mysql_num_rows($result);
    if ($rowcnt == 0) { mysql_close($conn); header('location: 404.html'); } else {
        $row = mysql_fetch_assoc($result);
        $uid = $row['uid'];
        
        $enable1 = 'delete from unaccts where uid='.$uid;
        $result = mysql_query($conn, $enable1);
	$enable2 = 'update users set enabled=true where uid='.$uid;
        $result = mysql_query($conn, $enable2);    
    mysql_close($conn);
    header('location: index.php?act=7'); };

?>