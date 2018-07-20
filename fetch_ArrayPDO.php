	<?php
		include ('Database.php');

		$query = $databaseLoad->query('SELECT * FROM karyawan');
		$no=0;
		// cek isian dari query 
		// var_dump($query);
		
		foreach ($query as $key ) {
			# code...
			$no++;
			echo $no.' '.$key['nama'].'<br>';
		}
	?>