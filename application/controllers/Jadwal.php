<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Jadwal');
        $this->load->model('M_Dokter');
        $this->load->model('M_Poli');
    }

    public function index()
    {
        $dataAllJadwal = $this->M_Jadwal->getAllData();
        $dokter = $this->M_Dokter->getAllData();
        $poli = $this->M_Poli->getAllData();

        $mata = 0;
        $jantung = 0;
        $ginjal = 0;
        $gigi = 0;
        $kandungan = 0;

        foreach ($poli as $data_poli) {
            $data_poli->poli = $this->M_Poli->getDataDetail($data_poli->unit_id);
            $string = $data_poli->unit_nama;
            foreach ($dataAllJadwal as $row) {
                $row->dokter = $this->M_Dokter->getDataDetail($row->jadwal_id_dokter);
                if ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$mata++] = $row;
                } elseif ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$jantung++] = $row;
                } elseif ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$ginjal++] = $row;
                } elseif ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$gigi++] = $row;
                } elseif ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$kandungan++] = $row;
                }
            }
            
        }

        $data = array(
            'poli' => $poli,
            'jadwal' => $jadwal,
        );
        $this->load->view('jadwal/read', $data);
    }

    public function tambah_page()
    {
        $dokter = $this->M_Dokter->getAllData();
        $poli = $this->M_Poli->getAllData();

        $data = array(
            'dokter' => $dokter,
            'poli' => $poli,
        );

        $this->load->view('jadwal/create', $data);
    }

    public function edit_page($id)
    {
        $dokter = $this->M_Dokter->getAllData();
        $poli = $this->M_Poli->getAllData();

        $jadwalDetail = $this->M_Jadwal->getDataDetail($id);

        $data = array(
            'dataDetail' => $jadwalDetail,
            'dokter' => $dokter,
            'poli' => $poli,
        );
        $this->load->view('jadwal/edit', $data);
    }

    public function tambahData()
    {
        $id_dokter = $this->input->post('jadwal_id_dokter');
        $id_unit = $this->input->post('jadwal_id_unit');
        $senin = $this->input->post('senin');
        $selasa = $this->input->post('selasa');
        $rabu = $this->input->post('rabu');
        $kamis = $this->input->post('kamis');
        $jumat = $this->input->post('jumat');
        $sabtu = $this->input->post('sabtu');
        $minggu = $this->input->post('minggu');
        
        $ArrInsert = array(
            'jadwal_id_dokter' => $id_dokter,
            'jadwal_id_unit' => $id_unit,
            'senin' => $senin,
            'selasa' => $selasa,
            'rabu' => $rabu,
            'kamis' => $kamis,
            'jumat' => $jumat,
            'sabtu' => $sabtu,
            'minggu' => $minggu,
        );

        $this->M_Jadwal->insertData($ArrInsert);
        redirect(base_url('jadwal'));
    }

    public function editData()
    {
        $id = $this->input->post('jadwal_id');
        $id_dokter = $this->input->post('jadwal_id_dokter');
        $id_unit = $this->input->post('jadwal_id_unit');
        $senin = $this->input->post('senin');
        $selasa = $this->input->post('selasa');
        $rabu = $this->input->post('rabu');
        $kamis = $this->input->post('kamis');
        $jumat = $this->input->post('jumat');
        $sabtu = $this->input->post('sabtu');
        $minggu = $this->input->post('minggu');

        $ArrUpdate = array(
            'jadwal_id' => $id,
            'jadwal_id_dokter' => $id_dokter,
            'jadwal_id_unit' => $id_unit,
            'senin' => $senin,
            'selasa' => $selasa,
            'rabu' => $rabu,
            'kamis' => $kamis,
            'jumat' => $jumat,
            'sabtu' => $sabtu,
            'minggu' => $minggu,
        );

        $this->M_Jadwal->updateData($id, $ArrUpdate);
        redirect(base_url('jadwal'));
    }

    public function deleteData($id)
    {
        $this->M_Jadwal->deleteData($id);
        redirect(base_url('jadwal'));
    }

    public function download() 
    {
        $dataAllJadwal = $this->M_Jadwal->getAllData();
        $dokter = $this->M_Dokter->getAllData();
        $poli = $this->M_Poli->getAllData();
        
        $mata = 0;
        $jantung = 0;
        $ginjal = 0;
        $gigi = 0;
        $kandungan = 0;

        foreach ($poli as $data_poli) {
            $data_poli->poli = $this->M_Poli->getDataDetail($data_poli->unit_id);
            $string = $data_poli->unit_nama;
            foreach ($dataAllJadwal as $row) {
                $row->dokter = $this->M_Dokter->getDataDetail($row->jadwal_id_dokter);
                if ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$mata++] = $row;
                } elseif ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$jantung++] = $row;
                } elseif ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$ginjal++] = $row;
                } elseif ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$gigi++] = $row;
                } elseif ($row->jadwal_id_unit == $data_poli->unit_id) {
                    $jadwal[$string][$kandungan++] = $row;
                }
            }
            
        }

        $data = array(
            'poli' => $poli,
            'jadwal' => $jadwal,
        );  
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-jadwal.pdf";
		$this->pdf->load_view('pdf/laporan_jadwal', $data);
    }
}
