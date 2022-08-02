SELECT master_unit.unit_nama as Poli, CONCAT(master_diagnosa.diagnosa_kode, master_diagnosa.diagnosa_name) as Diagnosa, COUNT(master_diagnosa.diagnosa_kode) AS Jumlah
FROM diagnosa_pasien
INNER JOIN master_diagnosa ON master_diagnosa.diagnosa_id = diagnosa_pasien.m_diagnosa_id
INNER JOIN kunjungan_pasien ON kunjungan_pasien.pendaftaran_id = diagnosa_pasien.kunjungan_id
INNER JOIN master_unit ON master_unit.unit_id = kunjungan_pasien.m_unit_id
WHERE MONTH(kunjungan_pasien.daftar_tanggal) = 07
GROUP BY diagnosa_pasien.m_diagnosa_id