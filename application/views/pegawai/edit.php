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
    <form action="<?= base_url('pegawai/editData') ?>" method="POST">
        <table>
            <tr>
            <input type="hidden" name="pegawai_id" value="<?= $dataDetail->pegawai_id ?>">
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="pegawai_nama" value="<?= $dataDetail->pegawai_nama ?>"></td>
            </tr>
            <tr>
                <td>Nomor Pegawai</td>
                <td>:</td>
                <td><input type="text" name="pegawai_nomor" value="<?= $dataDetail->pegawai_nomor ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="pegawai_jenis_kelamin" value="<?= $dataDetail->pegawai_jenis_kelamin ?>"></td>
            </tr>
            <tr>
                <td>sip</td>
                <td>:</td>
                <td><input type="text" name="pegawai_sip" value="<?= $dataDetail->pegawai_sip ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>