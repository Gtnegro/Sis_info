<?php
 
$result = shell_exec ('uptime');


?>

<form action="" method="post">
	<table>
		<tr>
			<th>UpTime</th>
		</tr>
		<tr>
			<td><?php echo "<pre>$result</pre>";?></td>
		</tr>
	</table>
</form>