<?php
class daftar_penginapan extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert($data){
        $this->db->insert('daftar_penginapan',$data);
    }

    function update($id,$data){
        $this->db->where('ID_INAP', $id);
        $this->db->update('daftar_penginapan', $data);
    }

    function delete($data){
        $this->db->where('ID_INAP', $data);
        $this->db->delete('daftar_penginapan');
    }

    function get_by_id($id){
        $this->db->from('daftar_penginapan');
        $this->db->where('daftar_penginapan.ID_INAP',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_all(){
        $this->db->from('daftar_penginapan');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_data(){
        $this->db->from('daftar_penginapan');
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result_array();
    }

    function search(){
        $query = $this->db->query("");
        if ($query->num_rows > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
}