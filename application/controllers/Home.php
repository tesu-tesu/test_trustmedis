<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dokter');
	}

	public function index()
	{
		$queryAllDokter = $this->M_Dokter->getAllData();
		$DATA = array('queryAllDokters' => $queryAllDokter);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah()
	{
		$this->load->view('create');
	}

	public function halaman_edit($id)
	{
		$dokterDetail = $this->M_Dokter->getDataDetail($id);
		$DATA = array('dataDetail' => $dokterDetail);
		$this->load->view('edit', $DATA);
	}

	public function tambahData()
	{
		$pegawai_count = $this->M_Dokter->getLastData();

		if (!$pegawai_count) {
			$id_new = 0;
		} else {
			$id_new = $pegawai_count->pegawai_id + 1;
		}

		$nama = $this->input->post('pegawai_nama');
		$nomor = $this->input->post('pegawai_nomor');
		$jenis_kelamin = $this->input->post('pegawai_jenis_kelamin');
		$sip = $this->input->post('pegawai_sip');

		$ArrInsert = array(
			'pegawai_id' => $id_new,
			'pegawai_nama' => $nama,
			'pegawai_nomor' => $nomor,
			'pegawai_jenis_kelamin' => $jenis_kelamin,
			'pegawai_sip' => $sip,
		);

		$this->M_Dokter->insertData($ArrInsert);
		redirect(base_url(''));
	}

	public function editData()
	{
		$id = $this->input->post('pegawai_id');
		$nama = $this->input->post('pegawai_nama');
		$nomor = $this->input->post('pegawai_nomor');
		$jenis_kelamin = $this->input->post('pegawai_jenis_kelamin');
		$sip = $this->input->post('pegawai_sip');

		$ArrUpdate = array(
			'pegawai_id' => $id,
			'pegawai_nama' => $nama,
			'pegawai_nomor' => $nomor,
			'pegawai_jenis_kelamin' => $jenis_kelamin,
			'pegawai_sip' => $sip,
		);

		$this->M_Dokter->updateData($id, $ArrUpdate);
		redirect(base_url(''));
	}

	public function deleteData($id)
	{
		$this->M_Dokter->deleteData($id);
		redirect(base_url(''));
	}
}
