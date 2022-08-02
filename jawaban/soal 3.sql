SELECT 
	master_unit.unit_nama as Poli, 
    master_pasien.pasien_nama as Nama,
    master_pasien.pasien_alamat as Alamat,
    master_pembayaran.bayar_nama as "Cara Bayar",
    GROUP_CONCAT(master_diagnosa.diagnosa_name SEPARATOR '  |  ') as Diagnosa,
    master_dokter.pegawai_nama as Dokter,
    kunjungan_pasien.daftar_tanggal as "Tanggal Masuk",
    kunjungan_pasien.pulang_tanggal as "Tanggal Pulang"
FROM diagnosa_pasien
INNER JOIN master_diagnosa ON master_diagnosa.diagnosa_id = diagnosa_pasien.m_diagnosa_id
INNER JOIN kunjungan_pasien ON kunjungan_pasien.pendaftaran_id = diagnosa_pasien.kunjungan_id
INNER JOIN master_unit ON master_unit.unit_id = kunjungan_pasien.m_unit_id
INNER JOIN master_pasien ON master_pasien.pasien_id = kunjungan_pasien.m_pasien_id
INNER JOIN master_pembayaran ON master_pembayaran.bayar_id = kunjungan_pasien.m_bayar_id
INNER JOIN master_dokter ON master_dokter.pegawai_id = kunjungan_pasien.m_dokter_id
GROUP BY diagnosa_pasien.kunjungan_id