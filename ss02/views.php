<?php
// группы - не зарегистрирован, рут, админ, модератор, владелец компании, заказчик, исполнитель, пользователь
$groups = ['grp_ureg','grp_root','grp_admin','grp_moder','grp_boss','grp_customer','grp_worker','grp_executor','grp_user'];
// состояние пользователя - как заказчик, как исполнитель, как посетитель
$states = ['as_customer', 'as_executor', 'as_visitor'];

class Users {
var $uid;
var $gid;
var $state;
var $fname;
var $sname;
var $fullname;
var $mail;
var $passwd;
var $craft;
var $special;
var $about;
var $photo;

function CreateUser($fname, $sname, $mail, $passwd) {
	};
function ReadUser() {
	};
function UpdateUser($uid, $gid, $state, $fullname, $craft, $special, $about) {
	};
function DeleteUser($uid) {
	};
function ChangePassword($uid, $passwd) {
	};
};

class Permissions {
var $pid;
var $act
function CreatePermission($act) {
	};
function ReadPermission($pid) {
	};
function UpdatePermission($pid, $act) {
	};
function DeletePermission($pid) {
	};
function GetPID($act) {};
};

class Rules { //правило только что-то разрешает определённой группе, его нельзя изменить - только добавить и удалить; возможен просмотр списка правил
var $rid;
var $pid;
var $gid;
var $state;
var $allow;
function CreateRule($pid, $gid, $state, $allow) {
	};
function ReadRule($rid) {
	};
function DeleteRule($rid) {
	};

};

?>
