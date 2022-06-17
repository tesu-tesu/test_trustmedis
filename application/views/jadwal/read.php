<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jadwal</title>
</head>

<body>
    <h1>Data Jadwal</h1>

    <br>

    <a href="<?= base_url(('/jadwal/tambah_page')) ?>">Tambah Data</a>
    <a type="button" href="<?= base_url(('/jadwal/download')) ?>" style="margin-left: 20px;">download</a>
    <br><br>

    <table border="1" style="border-color: black;">
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
            <th>Action</th>
        </tr>

        <?php
            $no = 0;
            foreach ($poli as $row_poli) { ?>
            <tr style="background-color: #C9DAF8;">
                <td><?= $no++ + 1?></td>
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
                            <td><a style="margin-left: 10px ; margin-right: 10px;" href="<?= base_url(('/jadwal/edit_page')) ?>/<?= $row_row_jadwal->jadwal_id ?>">Edit</a> |
                                <a style="margin-left: 10px ; margin-right: 10px;" href="<?= base_url('/jadwal/deleteData') ?>/<?= $row_row_jadwal->jadwal_id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </table>
</body>

</html>