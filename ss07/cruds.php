<?php
$conn = @mysqli_connect ($host, $user, $password, $db);

$user = [
  array("uid",    "N", 11),
  array("enabled","N", 2),
  array("status", "N", 2),
  array("name",   "C", 64),
  array("disp",   "C", 64),
  array("mail",   "C", 48),
  array("passwd", "C", 32)
];

$user = [
  array("name",   "C", 64),

class User {
	public static function uCreate($name) { $query='insert into users (name,disp,mail,passwd) values ("'.$user["name"].'","'.$user["disp"].'","'.$user["mail"].'","'.$user["passwd"].'");';
	}
	public static function uRead()   { $query='select uid,enabled,status,name,disp,mail,passwd from users;';
	}
	public static function uUpdate() {
	}
	public static function uDelete() {
	}
};

?>
