<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Jadwal extends CI_Model
{

    function getAllData()
    {
        $query = $this->db->get('tb_jadwal_dokter');
        return $query->result();
    }

    function insertData($data)
    {
        $this->db->insert('tb_jadwal_dokter', $data);
    }

    function getDataDetail($id)
    {
        $this->db->where('jadwal_id', $id);
        $query = $this->db->get('tb_jadwal_dokter');
        return $query->row();
    }

    function updateData($id, $data)
    {
        $this->db->where('jadwal_id', $id);
        $this->db->update('tb_jadwal_dokter', $data);
    }

    function deleteData($id)
    {
        $this->db->where('jadwal_id', $id);
        $this->db->delete('tb_jadwal_dokter');
    }

    function getLastData()
    {
        $row = $this->db->select("*")->limit(1)->order_by('pegawai_id', "DESC")->get("master_dokter")->row();
        return $row;
    }
}
