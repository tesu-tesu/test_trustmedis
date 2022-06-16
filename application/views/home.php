<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
</head>
<body>
    <h1>Data Pegawai</h1>
    
    <a href="<?= base_url(('/home/halaman_tambah')) ?>">Tambah Data</a>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomer Pegawai</th>
            <th>Jenis Kelamin</th>
            <th>Pegawai sip</th>
        </tr>
        <?php 
            $no = 1;
            foreach ($queryAllDokters as $row) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row->pegawai_nama ?></td>
            <td><?= $row->pegawai_nomor ?></td>
            <td><?= $row->pegawai_jenis_kelamin ?></td>
            <td><?= $row->pegawai_sip ?></td>
            <td>Mata</td>
            <td><a href="<?= base_url(('/home/halaman_edit')) ?>/<?= $row->pegawai_id ?>">Edit</a> | 
            <a href="<?= base_url('home/deleteData') ?>/<?= $row->pegawai_id ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>