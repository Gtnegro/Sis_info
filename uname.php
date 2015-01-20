<?php
 
$result = shell_exec ('uname');


?>

<form action="" method="post">
	<table>
		<tr>
			<th>Uname</th>
		</tr>
		<tr>
			<td><?php echo "<pre>$result</pre>";?></td>
		</tr>
	</table>
</form>