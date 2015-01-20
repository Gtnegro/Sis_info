<?php  
	if ((!isset($_GET['ip'])) && (!isset($_GET['netmask'])) && (!isset($_GET['network'])) && (!isset($_GET['gateway'])) && (!isset($_GET['dns']))) {
	  	header("Location:cadastrar.php");
	 }  

	$cod = '';
	$ip = $_GET['ip'];
	$netmask = $_GET['netmask'];
	$network = $_GET['network'];
	$gateway = $_GET['gateway'];
	$dns = $_GET['dns'];

	$con = new mysqli('localhost','root','123','rede');

	if (!$con) {
		echo "Erro: ".mysqli_connect_error();
	}

	$sql = "INSERT INTO dynamic VALUES (\"$cod\",\"$ip\",\"$netmask\",\"$network\",\"$gateway\",\"$dns\")";

	if($result = $con->query($sql)){
		echo "Dados cadastrado!";
	}
	//$result->close();
	$con->close();

	header("Location:cadastrar.php");
?>