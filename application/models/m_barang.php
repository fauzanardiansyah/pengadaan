<?php 

class M_barang extends CI_Model{
    public function get_data (){
       return $this->db->get('t_barang')->result_array();
    }
    }

?>