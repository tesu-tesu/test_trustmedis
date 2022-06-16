<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <h3>Edit Tambah Data Pegawai</h3>
    <form action="<?= base_url('poli/editData') ?>" method="POST">
        <table>
            <tr>
            <input type="hidden" name="unit_id" value="<?= $dataDetail->unit_id ?>">
                <td>Kode Unit</td>
                <td>:</td>
                <td><input type="text" name="unit_kode" value="<?= $dataDetail->unit_kode ?>"></td>
            </tr>
            <tr>
                <td>Unit Nama</td>
                <td>:</td>
                <td><input type="text" name="unit_nama" value="<?= $dataDetail->unit_nama ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>