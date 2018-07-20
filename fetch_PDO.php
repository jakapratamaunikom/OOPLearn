	<?php
		include ('Database.php');

		$query = $databaseLoad->query('SELECT * FROM karyawan WHERE id= 1');
		$fetch = $query->fetch();
		$id = $fetch[0];
		$nama = $fetch[1];
		$alamat = $fetch[2];
		$npwp = $fetch[3];


		echo $id.$nama. $alamat. $npwp;

	?>