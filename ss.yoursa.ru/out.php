<?php
    session_start();
    $_SESSION['user'] = '';
    header('location: index.php?act=4');
?>
