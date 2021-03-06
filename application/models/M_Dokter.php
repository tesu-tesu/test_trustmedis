<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Dokter extends CI_Model
{

    function getAllData()
    {
        $query = $this->db->get('master_dokter');
        return $query->result();
    }

    function insertData($data)
    {
        $this->db->insert('master_dokter', $data);
    }

    function getDataDetail($id)
    {
        $this->db->where('pegawai_id', $id);
        $query = $this->db->get('master_dokter');
        return $query->row();
    }

    function updateData($id, $data)
    {
        $this->db->where('pegawai_id', $id);
        $this->db->update('master_dokter', $data);
    }

    function deleteData($id)
    {
        $this->db->where('pegawai_id', $id);
        $this->db->delete('master_dokter');
    }

    function getLastData()
    {
        $row = $this->db->select("*")->limit(1)->order_by('pegawai_id', "DESC")->get("master_dokter")->row();
        return $row;
    }
}
