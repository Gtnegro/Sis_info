<style>
	td{
		text-align: center;
	}
</style>

<?php
$con = new mysqli("localhost","root","123","rede");

if (mysqli_connect_errno()) {
  echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
  die();
};

$result = $con->query("SELECT * FROM dynamic");

echo '<table border="1" width="50%">';
echo '<thead><tr>';
echo '<th>Ip</th>';
echo '<th>Netmask</th>';
echo '<th>Network</th>';
echo '<th>Gateway</th>';
echo '<th>DNS</th>';
echo '<th></th>';
echo '</tr></thead>';

echo '<tbody>';
while($row = $result->fetch_assoc()) {
  echo '<tr>';
    echo '<td>' . $row['ip'] . '</td>';
    echo '<td>' . $row['netmask'] . '</td>';
    echo '<td>' . $row['network'] . '</td>';
    echo '<td>' . $row['gateway'] . '</td>';
    echo '<td>' . $row['dns'] . '</td>';
    echo '<td><a href="apagar.php?id2=' . $row['cod'] . '">apagar</a></td>';
    echo '</tr>';
};

mysqli_close($con);
?> 