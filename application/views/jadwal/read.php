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
        <?php $i = 0; ?>
        <?php foreach ($dataAllJadwal as $row) { ?>
            <tr style="background-color: #C9DAF8;">
                <td><?= $i++ + 1 ?></td>
                <td colspan="1"><?= $poli_jadwal[($i - 1)]->unit_nama ?></td>
                <td colspan="8"></td>
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
                <td ><a style="margin-left: 10px ; margin-right: 10px;" href="<?= base_url(('/jadwal/edit_page')) ?>/<?= $row->jadwal_id ?>">Edit</a> |
                    <a style="margin-left: 10px ; margin-right: 10px;" href="<?= base_url('/jadwal/deleteData') ?>/<?= $row->jadwal_id ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>