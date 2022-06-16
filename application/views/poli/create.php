<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pegawai</title>
</head>

<body>
    <h3>Halaman Tambah Data Pegawai</h3>
    <form action="<?= base_url('poli/tambahData') ?>" method="POST">
        <table>
            <tr>
                <td>Unit Kode</td>
                <td>:</td>
                <td><input type="text" name="unit_kode"></td>
            </tr>
            <tr>
                <td>Unit Nama</td>
                <td>:</td>
                <td><input type="text" name="unit_nama"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>