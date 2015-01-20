<?php  
	if ((!isset($_GET['ip'])) && (!isset($_GET['netmask'])) && (!isset($_GET['network'])) && (!isset($_GET['gateway'])) && (!isset($_GET['dns']))) {
	  	
	 }  

	$cod = $_GET['id2'];

		$con = new mysqli('localhost','root','123','rede');

	if (!$con) {
		echo "Erro: ".mysqli_connect_error();
	}


	 $sql = "DELETE FROM dynamic WHERE  cod = $cod";

	 
	if($apagar = $con->query($sql)){
		echo "Dados apagados!";
	}

	var_dump($apagar);
	
	$con->close();

	header("Location:cadastrar.php");
	 


	 ?>