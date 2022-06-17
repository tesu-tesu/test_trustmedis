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
    <?php
    $no = 0;
    foreach ($poli as $row_poli) { ?>
        <tr style="background-color: #C9DAF8;">
            <td><?= $no++ + 1 ?></td>
            <td colspan="1"><?= $row_poli->unit_nama  ?></td>
            <td colspan="8"></td>
        </tr>
        <?php foreach ($jadwal as $row_jadwal) { ?>
            <?php foreach ($row_jadwal as $row_row_jadwal) { ?>
                <?php if ($row_row_jadwal->jadwal_id_unit == $row_poli->unit_id) { ?>
                    <tr>
                        <td></td>
                        <td><?= $row_row_jadwal->dokter->pegawai_nama ?></td>
                        <td><?= $row_row_jadwal->senin ?></td>
                        <td><?= $row_row_jadwal->selasa ?></td>
                        <td><?= $row_row_jadwal->rabu ?></td>
                        <td><?= $row_row_jadwal->kamis ?></td>
                        <td><?= $row_row_jadwal->jumat ?></td>
                        <td><?= $row_row_jadwal->sabtu ?></td>
                        <td><?= $row_row_jadwal->minggu ?></td>
                    </tr>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</table>