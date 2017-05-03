<?php
$pageh='<!DOCTYPE html><html><head><title>default iface</title><style>body { width: 35em; margin: 0 auto; font-family: Tahoma, Verdana, Arial, sans-serif; } </style></head><body>';
$paget='<input type="submit" value="Отправить"></form></body></html>';

function iUserCreate() { global $pageh, $paget; echo $pageh;
echo 'User -> Create<br><form action="index.php?act=db" method="post"><input type="hidden" name="action" value="create">';
echo 'Username: <input type="text" name="username" size="60"><br>';
echo 'Password: <input type="text" name="password" size="60"><br>';
echo 'E-Mail: <input type="text" name="email" size="60"><br>';
echo 'Display name: <input type="text" name="descr" size="60"><br>';
echo $paget;
}

function iUserRead() { global $pageh, $paget; echo $pageh;
echo 'User -> Read<br><form action="index.php?act=db" method="post"><input type="hidden" name="action" value="read">';
echo '';
echo $paget;
}

function iUserUpdate() { global $pageh, $paget; echo $pageh;
echo 'User -> Update<br><form action="index.php?act=db" method="post"><input type="hidden" name="action" value="update">';
echo '';
echo $paget;
}

function iUserDelete() { global $pageh, $paget; echo $pageh;
echo 'User -> Delete<br><form action="index.php?act=db" method="post"><input type="hidden" name="action" value="delete">';
echo '';
echo $paget;
}


?>