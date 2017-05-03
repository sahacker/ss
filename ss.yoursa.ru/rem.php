<?php

$email = $_POST['email'];

include 'cfg.php';

    $conn = @mysql_connect ($host, $user, $password, $db);
    if (!$conn) { mysql_close($conn); header('location: index.php?act=6'); }
        $query='select surname,name,passwd from users where enabled=true and email="'.$email.'"';
        $result = mysql_query($conn, $query);
        $rowcnt = mysql_num_rows($result);
    if ($rowcnt == 0) { mysql_close($conn); header('location: index.php?act=6'); } else {
         $row   = mysql_fetch_assoc($result);
         $zpass = $row['passwd'];
         $sname = $row['surname'];
         $nname = $row['name'];
         mysql_close($conn);
        // отправка почты
        $from     = 'noreply@yoursa.ru';
        $sendmsg  = 'Simplex Solutions';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: "'.$sendmsg.'" <'.$from.'>\n';
        $headers .= 'Return-Path: <'.$from.'>\n';
        $headers .= 'X-Priority: 3\n';
        $headers .= 'X-Mailer: '.$sendmsg.'\n';
        $fname    = $sname.' '.$nname;
        $subject  = 'Напоминание пароля.';
        $message  = '<html><head><title>Напоминание пароля</title></head><body>Добрый день, '.$fname.'<br>
Вы запросили напоминание пароля на портале <a href="http://ss.yoursa.ru">http://ss.yoursa.ru</a><br>
Напоминаем Ваш пароль:<br><br><b>'.$zpass.'</b><br><br>Пожалуйста, не отвечайте на это письмо! Ваш ответ не будет прочитан.<br>
С уважением, <br>Администрация проекта Simplex Solutions.<br></body></html>';

        mail($email, $subject, $message, $headers);
        header('location: rem2.html');
    };     
?>