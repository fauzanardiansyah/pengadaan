<?php

class Hello extends CI_Controller{
    public function index(){
        $this->load->model('m_barang');
        $data['barang']=$this->m_barang->get_data();

        $this->load->view('v_barang', $data);
    }
}

?>