<?php
	include ('Database.php');
	$query = $databaseLoad->exec("UPDATE karyawan  SET nama = 'Andi Odang'   WHERE id=3");
	echo $query;	
?>