<?php
 
$result = shell_exec ('hostname');


?>

<form action="" method="post">
	<table>
		<tr>
			<th>HOstname</th>
		</tr>
		<tr>
			<td><?php echo "<pre>$result</pre>";?></td>
		</tr>
	</table>
</form>
