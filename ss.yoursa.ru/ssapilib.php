<?php

require_once 'cfg.php';

class ssAPInet
{
 var $mysqli;
 var $err;
 function ssAPInet()
    {
    global $host, $user, $password, $db;
    $this->mysqli = new mysqli($host, $user, $password, $db);
    if ($this->mysqli->connect_errno) { echo "Не удалось подключиться к MySQL: " . $this->mysqli->connect_error; }
    }
 public function NumberQry($uid)
    {
	// запрос количества сетей для владельца - функция вернёт количество сетей для владельца /
        $res = $this->mysqli->query("select count(*) from groups where owner=".$uid);
        $row = $res->fetch_assoc();
        $row['count(*)'];
    }

 public function Add($uid, $suffix, $descr)
	{
	// Добавить сеть (только владелец) -  массив "сеть" - gid, owner, suffix, descr
        $res = $this->mysqli->query("insert into groups (owner,suffix,descr) values (".$uid.", '".$suffix."', '".$descr."')");
        return 0;
	}

 public function Del($uid, $gid)
	{
	// Удалить сеть (только владелец) - при успехе функция не вернёт ничего
	}

}

?>