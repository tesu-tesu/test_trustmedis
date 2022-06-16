<table border="1" style="border-color: black;">
		<tr>
			<td colspan="9" style="text-align:center; margin: 15px; background-color: #073763; color:#ffffff"> <span style="font-size: 25px; text-align: center;"> DATA JADWAL DOKTER RS TRUSTMEDIKA SURABAYA </span></td>
		</tr>
        <tr style="background-color:#0B5394;color:#ffffff;">
            <th>No</th>
            <th>Klinik</th>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jumat</th>
            <th>Sabtu</th>
            <th>Minggu</th>
        </tr>
        <?php $i=0; ?>
        <?php foreach ($dataAllJadwal as $row) { ?>
            <tr  style="background-color: #C9DAF8;">
                <td><?= $i++ + 1 ?></td>
                <td colspan="1"><?= $poli_jadwal[($i - 1)]->unit_nama ?></td>
                <td colspan="7"></td>
            </tr>
            <tr>
                <td></td>
                <td><?= $dokter[($i - 1)]->pegawai_nama ?></td>
                <td><?= $row->senin ?></td>
                <td><?= $row->selasa ?></td>
                <td><?= $row->rabu ?></td>
                <td><?= $row->kamis ?></td>
                <td><?= $row->jumat ?></td>
                <td><?= $row->sabtu ?></td>
                <td><?= $row->minggu ?></td>
            </tr>
        <?php } ?>
    </table>