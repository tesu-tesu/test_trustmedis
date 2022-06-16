<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Poli');
	}

	public function index()
	{
		$dataAllPoli = $this->M_Poli->getAllData();
		$data = array('dataAllPoli' => $dataAllPoli);
		$this->load->view('poli/read', $data);
	}

	public function tambah_page()
	{
		$this->load->view('poli/create');
	}

	public function edit_page($id)
	{
		$poliDetail = $this->M_Poli->getDataDetail($id);
		$data = array('dataDetail' => $poliDetail);
		$this->load->view('poli/edit', $data);
	}

	public function tambahData()
	{
        $unit_count = $this->M_Poli->getLastData();
		if (!$unit_count) {
			$id_new = 0;
		} else {
			$id_new = $unit_count->unit_id + 1;
		}

		$kode = $this->input->post('unit_kode');
		$nama = $this->input->post('unit_nama');


		$ArrInsert = array(
            'unit_id' => $id_new,
			'unit_kode' => $kode,
			'unit_nama' => $nama,
		);

		$this->M_Poli->insertData($ArrInsert);
		redirect(base_url('poli'));
	}

	public function editData()
	{
		$id = $this->input->post('unit_id');
		$kode = $this->input->post('unit_kode');
		$nama = $this->input->post('unit_nama');

		$ArrUpdate = array(
			'unit_id' => $id,
			'unit_kode' => $kode,
			'unit_nama' => $nama,
		);

		$this->M_Poli->updateData($id, $ArrUpdate);
		redirect(base_url('poli'));
	}

	public function deleteData($id)
	{
		$this->M_Poli->deleteData($id);
		redirect(base_url('poli'));
	}
}
