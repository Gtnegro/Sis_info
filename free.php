<?php
$result = shell_exec ('free');
?>

<form action="" method="post">
	<table>
		<tr>
			<th>Memory</th>
		</tr>
		<tr>
			<td><?php echo "<pre>$result</pre>";?></td>
		</tr>
	</table>
</form>