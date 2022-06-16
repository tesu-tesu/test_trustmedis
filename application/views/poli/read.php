<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data Pegawai</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    
    <a href="<?= base_url(('/poli/tambah_page')) ?>">Tambah Data</a>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Unit Kode</th>
            <th>Unit Nama</th>
            <th>Action</th>
        </tr>
        <?php 
            $no = 1;
            foreach ($dataAllPoli as $row) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->unit_kode ?></td>
            <td><?= $row->unit_nama ?></td>
            <td><a href="<?= base_url(('/poli/edit_page')) ?>/<?= $row->unit_id ?>">Edit</a> | 
            <a href="<?= base_url('poli/deleteData') ?>/<?= $row->unit_id ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>