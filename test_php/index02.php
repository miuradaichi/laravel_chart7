<table border="1" style="border-collapse:collapse">
<?php
for($i=1;$i<10;$i++){
	print '<tr>';
	for($j=1;$j<10;$j++){
		print '<td>';
		print $i * $j;
		print '</td>';
	}
	print '</tr>';
}

?>
</table>