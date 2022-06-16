<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Poli extends CI_Model
{

    function getAllData()
    {
        $query = $this->db->get('master_unit');
        return $query->result();
    }

    function insertData($data)
    {
        $this->db->insert('master_unit', $data);
    }

    function getDataDetail($id)
    {
        $this->db->where('unit_id', $id);
        $query = $this->db->get('master_unit');
        return $query->row();
    }

    function updateData($id, $data)
    {
        $this->db->where('unit_id', $id);
        $this->db->update('master_unit', $data);
    }

    function deleteData($id)
    {
        $this->db->where('unit_id', $id);
        $this->db->delete('master_unit');
    }

    function getLastData()
    {
        $row = $this->db->select("*")->limit(1)->order_by('unit_id', "DESC")->get("master_unit")->row();
        return $row;
    }
}
