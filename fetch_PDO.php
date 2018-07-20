	<?php
		include ('Database.php');

		$query = $databaseLoad->query('SELECT * FROM karyawan WHERE id= 1');
		$fetch = $query->fetch();
		$nama = $fetch['nama'];

		echo $nama;
	?>