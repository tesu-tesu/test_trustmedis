<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Pegawai');
	}

	public function index()
	{
		$dataAllPegawai = $this->M_Pegawai->getAllData();
		$data = array('dataAllPegawai' => $dataAllPegawai);
		$this->load->view('pegawai/read', $data);
	}

	public function tambah_page()
	{
		$this->load->view('pegawai/create');
	}

	public function edit_page($id)
	{
		$pegawaiDetail = $this->M_Pegawai->getDataDetail($id);
		$data = array('dataDetail' => $pegawaiDetail);
		$this->load->view('pegawai/edit', $data);
	}

	public function tambahData()
	{
		$nama = $this->input->post('pegawai_nama');
		$nomor = $this->input->post('pegawai_nomor');
		$jenis_kelamin = $this->input->post('pegawai_jenis_kelamin');
		$sip = $this->input->post('pegawai_sip');

		$ArrInsert = array(
			'pegawai_nama' => $nama,
			'pegawai_nomor' => $nomor,
			'pegawai_jenis_kelamin' => $jenis_kelamin,
			'pegawai_sip' => $sip,
		);

		$this->M_Pegawai->insertData($ArrInsert);
		redirect(base_url('pegawai'));
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

		$this->M_Pegawai->updateData($id, $ArrUpdate);
		redirect(base_url('pegawai'));
	}

	public function deleteData($id)
	{
		$this->M_Pegawai->deleteData($id);
		redirect(base_url('pegawai'));
	}
}
