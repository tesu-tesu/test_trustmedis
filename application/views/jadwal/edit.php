<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <h3>Halaman Edit Data Jadwal Dokter</h3>
    <form action="<?= base_url('jadwal/editData') ?>" method="POST">
        <table>
            <input type="hidden" name="jadwal_id" value="<?= $dataDetail->jadwal_id ?>">
            <tr>
                <td>Jadwal Kodee</td>
                <td>:</td>
                <td><input type="text" name="jadwal_kode" value="<?= $dataDetail->jadwal_kode ?>"></td>
            </tr>
            <tr>
                <td>Dokter</td>
                <td>:</td>
                <td>
                    <select name="jadwal_id_dokter">
                        <?php foreach ($dokter as $row) { ?>
                            <option value="<?= $row->pegawai_id ?>" <?php if ($row->pegawai_id == $dataDetail->jadwal_id_dokter) : ?> selected <?php endif ?>><?= $row->pegawai_nama ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Poli</td>
                <td>:</td>
                <td>
                    <select name="jadwal_id_unit">
                        <?php foreach ($poli as $row) { ?>
                            <option value="<?= $row->unit_id ?>" <?php if ($row->unit_id == $dataDetail->jadwal_id_unit) : ?> selected <?php endif ?>><?= $row->unit_nama ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jadwal Jam</td>
                <td>:</td>
                <td><input type="text" name="jadwal_jam" value="<?= $dataDetail->jadwal_jam ?>"></td>
            </tr>
            <tr>
                <td>Jadwal Hari</td>
                <td>:</td>
                <td><input type="text" name="jadwal_hari" value="<?= $dataDetail->jadwal_hari ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>