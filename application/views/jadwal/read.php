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

    <a href="<?= base_url(('/jadwal/tambah_page')) ?>">Tambah Data</a>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Dokter</th>
            <th>Poli</th>
            <th>Jam</th>
            <th>Hari</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 0;
        foreach ($dataAllJadwal as $row) {
        ?>
            <tr>
                <td><?= ++$no ?></td>
                <td><?= $dokter[($no - 1)]->pegawai_nama ?></td>
                <td><?= $poli_jadwal[($no - 1)]->unit_nama ?></td>
                <td><?= $row->jadwal_jam ?></td>
                <td><?= $row->jadwal_hari ?></td>
                <td><a href="<?= base_url(('/jadwal/edit_page')) ?>/<?= $row->jadwal_id ?>">Edit</a> |
                    <a href="<?= base_url(('/jadwal/deleteData')) ?>/<?= $row->jadwal_id ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <?php 
        foreach ($jadwal as $jadwal_2) {
            foreach ($jadwal_2 as $jadwal_3) {
                echo $jadwal_3['jadwal_hari'];
            }
        }
    ?>

    <br>
    <table border="1">
        <tr>
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
        $i = 0;
        foreach ($jadwal as $jadwal_2) { ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $poli[$i]->unit_nama ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <pre>

                    <td><?= print_r($jadwal_2) ?></td>
                </pre>
                <?php foreach ($jadwal_2 as $jadwal_3) { ?>
                        <td>
                            <?= $jadwal_3['jadwal_jam'] ?>
                        </td>
                <?php } ?>
            </tr>
        <?php
            $i++;
        } ?>
    </table>
</body>

</html>