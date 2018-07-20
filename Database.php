<?php

		 $host = 'localhost';
		 $user = 'root';
		 $pass = '';
		 $database = 'oopLearn';

		// Statment utk load koneksi
		try{
			$databaseLoad = new PDO(
				"mysql:host=$host;dbname=$database", $user, $pass);
			// Hanya sebagai penanda
			// if($databaseLoad) echo 'CONNECTED';

		}
		catch (PDOException $e){
			echo $e->getMessage();
			echo $databaseLoad->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRORMODE_EXCEPTION);


			// tutup koneksi
			$databaseLoad = 'null';

		}

		/*
			fungsi yang pertama kali dijalankan
		*/
		function __construct()
		{
			
		}

		function tampilData(){
			
		}
	