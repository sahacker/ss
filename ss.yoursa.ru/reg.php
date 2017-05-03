<?php
// require_once __DIR__ . '/autoload.php';

require_once "recaptchalib.php";
$siteKey = '6Lcg2RMTAAAAAHPSyhI5o33_na_QYpuZztLirFQP';
$secret = '6Lcg2RMTAAAAAA2RM1oUMBhcTE2ny2_GSbr8F7b_';
$lang = 'ru';
$response = null;
$reCaptcha = new ReCaptcha($secret);

    if ($_POST["g-recaptcha-response"]) { $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]); }

    if (!$response->success) {  header('location: index.php?act=2'); }

include 'cfg.php';

    $conn = @mysql_connect ($host, $user, $password, $db);
    if (!$conn) { mysql_close($conn); header('location: index.php?act=2'); }
    $sname = $_POST['surname'];
    $nname = $_POST['name'];
    $email = $_POST['email'];
    $xpass = $_POST['repassword'];
    
    $sql = "insert into users (surname, name, email, passwd) values ('".$sname."', '".$nname."', '".$email."', '".$xpass."')";
    /* echo $sql; */

    if (mysql_query($conn, $sql)) { 
	$query = "select uid from users where email='".$email."'";
	$salt = md5(uniqid(rand(),true));
	$result = mysql_query($conn, $query); 
	$row = mysql_fetch_assoc($result);
	$uid = $row['uid'];
	$activate = "insert into unaccts (uid, salt) values('".$uid."', '".$salt."')";
	$result = mysql_query($conn, $activate);
	
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
	$subject  = 'Успешная регистрация!';
	$message  = '<html><head><title>Подтверждение электронной почты.</title></head><body>Добрый день, '.$fname.'<br>
Вы успешно зарегистрировались на портале <a href="http://ss.yoursa.ru">http://ss.yoursa.ru</a><br>
Для активации Вашей учётной записи Вам необходимо подтвердить адрес Вашей электронной почты, пройдя по этой ссылке:<br>
<a href="http://ss.yoursa.ru/act.php?code='.$salt.'">http://ss.yoursa.ru/act.php?code='.$salt.'</a><br>
Эта ссылка будет действительна только в течение суток!<br>Пожалуйста, не отвечайте на это письмо! Ваш ответ не будет прочитан.<br>
С уважением, <br>Администрация проекта Simplex Solutions.<br></body></html>';

	mail($email, $subject, $message, $headers);

    mysql_close($conn); 
    header('location: index.php?act=1'); 
    } else { 
    mysql_close($conn); 
    header('location: index.php?act=2'); 
    };

?>
