<?php 

class Transaksi extends CI_Controller{

	function __construct(){
        parent::__construct();
        $this->load->model('m_barang');
	
		
	}

	function index(){
        $data['barang'] = $this->m_barang->tampil_data();
		$this->load->view('form_transaksi', $data);
	}
}