<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Jadwal Dokter</title>
</head>

<body>
    <h3>Halaman Tambah Data Jadwal Dokter</h3>
    <form action="<?= base_url('jadwal/tambahData') ?>" method="POST">
        <table>
            <tr>
                <td>Dokter</td>
                <td>:</td>
                <td>
                    <select name="jadwal_id_dokter">
                        <?php foreach ($dokter as $row) { ?>
                            <option value="<?= $row->pegawai_id ?>"><?= $row->pegawai_nama ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>

            </tr>
            <tr>
                <td>Poli</td>
                <td>:</td>
                <td>
                    <select name="jadwal_id_unit">
                        <?php foreach ($poli as $row) { ?>
                            <option value="<?= $row->unit_id ?>"><?= $row->unit_nama ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Senin</td>
                <td>:</td>
                <td><input type="text" name="senin"></td>
            </tr>
            <tr>
                <td>Selasa</td>
                <td>:</td>
                <td><input type="text" name="selasa"></td>
            </tr>
            <tr>
                <td>Rabu</td>
                <td>:</td>
                <td><input type="text" name="rabu"></td>
            </tr>
            <tr>
                <td>Kamis</td>
                <td>:</td>
                <td><input type="text" name="kamis"></td>
            </tr>
            <tr>
                <td>Jumat</td>
                <td>:</td>
                <td><input type="text" name="jumat"></td>
            </tr>
            <tr>
                <td>Sabtu</td>
                <td>:</td>
                <td><input type="text" name="sabtu"></td>
            </tr>
            <tr>
                <td>Minggu</td>
                <td>:</td>
                <td><input type="text" name="minggu"></td>
            </tr>
            <tr>
                <td colspan="3"><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>