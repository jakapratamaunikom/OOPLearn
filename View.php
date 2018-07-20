<?php
	include 'Database.php';

	$tampilData = new Database();


	foreach ($tampilData->tampilData() as $karyawan)
	?>
	<tr>
		<td><?= $karyawan['nama']; ?></td>
	</tr>

	}