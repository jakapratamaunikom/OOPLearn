<?php
	include ('Database.php');

	$query = $databaseLoad->exec("INSERT INTO karyawan (id,nama,alamat,npwp) VALUES(3,'Elma','Lobang buaya','214')");
	echo $query; // result = 1 (true)
?>