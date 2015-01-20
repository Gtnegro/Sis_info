<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="result.php" method="get">
		<legend>Info DHCP</legend>
		<fieldset>
			<label for="ip"> Ip number</label>
			<input type="text" name="ip" id="ip" required><br>

			<label for="netmask">Netmask</label>
			<input type="text" name="netmask" id="netmask" required><br>

			<label for="network">Network</label>
			<input type="text" name="network" id="network" required><br>
			
			<label for="gateway">Gateway</label>
			<input type="text" name="gateway" id="gateway" required><br>
			
			<label for="dns">DNS</label>
			<input type="text" name="dns" id="dns" required>
		</fieldset>
			<input type="submit" value="Cadastrar">
	</form><br><br>0

	<a href="mostrar.php/">Listar dados da tabela</a><br><br><br>





	<form action="apagar.php" method="get">
	<fieldset>
	<label for="ip"> Id</label>
			<input type="text" name="id2" id="id2" required><br>
	</fieldset>
			<input type="submit" value="Apagar">
	</form>



	
</body>
</html>