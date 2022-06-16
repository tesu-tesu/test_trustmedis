<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_Pegawai extends CI_Model {

        function getAllData() {
            $query = $this->db->get('master_pegawai');
            return $query->result();
        }

        function insertData($data) {
            $this->db->insert('master_pegawai', $data);
        }

        function getDataDetail($id) {
            $this->db->where('pegawai_id', $id);
            $query = $this->db->get('master_pegawai');
            return $query->row();
        }

        function updateData($id, $data) {
            $this->db->where('pegawai_id', $id);
            $this->db->update('master_pegawai', $data);
        }

        function deleteData($id) {
            $this->db->where('pegawai_id', $id);
            $this->db->delete('master_pegawai');
        }
    }
?>