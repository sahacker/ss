<?php
function DoUser() { 
$do = $_GET [ 'do' ];
switch ($do) {
	case 'create': iUserCreate(); break;
	case 'read':   iUserRead();   break;
	case 'update': iUserUpdate(); break;
	case 'delete': iUserDelete(); break;
	};
};
?>
