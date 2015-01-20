<?php
//set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
//include('Net/SSH2.php');
//$ssh = new Net_SSH2('localhost');
// echo $ssh->exec('pwd');
// $connection = ssh2_connect('localhost', 22);
// ssh2_auth_password($connection, 'vagrant', 'vagrant');
// $stream = ssh2_exec($connection, '/usr/local/bin/php -i');
// echo `cat /etc/shadow|grep vagrant`;
session_start();
extract($_POST);
if($login == 'gt' && $password == '123'){
//if ($ssh->login($login, $password)) {
	$_SESSION["logado"] = true;
	header("Location: home.php");
}else
	header("Location: login.html");