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
                <td>Senin</td>
                <td>:</td>
                <td><input type="text" name="senin" value="<?= $dataDetail->senin ?>"></td>
            </tr>
            <tr>
                <td>Selasa</td>
                <td>:</td>
                <td><input type="text" name="selasa" value="<?= $dataDetail->selasa ?>"></td>
            </tr>
            <tr>
                <td>Rabu</td>
                <td>:</td>
                <td><input type="text" name="rabu" value="<?= $dataDetail->rabu ?>"></td>
            </tr>
            <tr>
                <td>Kamis</td>
                <td>:</td>
                <td><input type="text" name="kamis" value="<?= $dataDetail->kamis ?>"></td>
            </tr>
            <tr>
                <td>Jumat</td>
                <td>:</td>
                <td><input type="text" name="jumat" value="<?= $dataDetail->jumat ?>"></td>
            </tr>
            <tr>
                <td>Sabtu</td>
                <td>:</td>
                <td><input type="text" name="sabtu" value="<?= $dataDetail->sabtu ?>"></td>
            </tr>
            <tr>
                <td>Minggu</td>
                <td>:</td>
                <td><input type="text" name="minggu" value="<?= $dataDetail->minggu ?>"></td>
            </tr>
        </table>
            <tr>
                <td colspan="3"><button type="submit">Submit</button></td>
            </tr>
    </form>
</body>

</html>