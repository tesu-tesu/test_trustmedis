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
        $poli_jadwal = [];
        $i = 0; //index poli
        $j=0; //index dokter

        // foreach ($poli as $data_poli) {
        //     $poli_test[$i] = $data_poli;
        //     foreach ($dataAllJadwal as $data_jadwal) {
        //         if ($data_poli->unit_id == $data_jadwal->jadwal_id_unit) {
        //             $jadwal[$i][$j]['pegawai_id'] = $data_jadwal->jadwal_id_dokter;
        //             $jadwal[$i][$j]['jadwal_hari'] = $data_jadwal->jadwal_hari;
        //             $jadwal[$i][$j]['jadwal_jam'] = $data_jadwal->jadwal_jam;
        //             $j++;
        //         }
        //     }
        //     $i++;
        // }

        // print('<pre>');
        // print_r($dataAllJadwal);
        // print('<pre>');
        
        // print('<pre>');
        // print_r($jadwal);
        // print('<pre>');
        // die();
        
        $i = 0;
        foreach ($dataAllJadwal as $data) {
            $dokter[$i] = $this->M_Dokter->getDataDetail($data->jadwal_id_dokter);
            $poli_jadwal[$i] = $this->M_Poli->getDataDetail($data->jadwal_id_unit);
            $i++;
        }


        $data = array(
            'dataAllJadwal' => $dataAllJadwal,
            'dokter' => $dokter,
            'poli_jadwal' => $poli_jadwal,
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

        $i = 0;
        foreach ($dataAllJadwal as $data) {
            $dokter[$i] = $this->M_Dokter->getDataDokterDetail($data->jadwal_id_dokter);
            $poli_jadwal[$i] = $this->M_Poli->getDataDetail($data->jadwal_id_unit);
            $i++;
        }

        $data = array(
            'dataAllJadwal' => $dataAllJadwal,
            'dokter' => $dokter,
            'poli_jadwal' => $poli_jadwal,
        );  
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-jadwal.pdf";
		$this->pdf->load_view('pdf/laporan_jadwal', $data);
        var_dump("halo");
        die();
    }
}
