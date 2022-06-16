<h2><center>Data Siswa</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
	<tr>
		<th>No</th>
		<th>Kode</th>
		<th>Dokter</th>
		<th>Poli</th>
		<th>Jam</th>
		<th>Hari</th>
	</tr>
	<?php 
	$no = 1;
	foreach($jadwal as $row)
	{
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $row->jadwal_kode; ?></td>
			<td><?= $row->jadwal_id_dokter; ?></td>
			<td><?= $row->jadwal_id_unit; ?></td>
			<td><?= $row->jadwal_jam; ?></td>
			<td><?= $row->jadwal_hari; ?></td>
		</tr>
		<?php
	}
	?>
</table>