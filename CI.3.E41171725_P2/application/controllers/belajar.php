<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
        parent::__construct();
				$this->load->helper('html');
				$this->load->model('m_data');
		
	}
 
	public function index(){
		echo "ini method index pada controller belajar | cara membuat controller pada codeigniter";
	}
    
    public function halo(){
		$data['nama_user'] = "Khotimah";
		$this->load->view('view_belajar',$data);
	}
	function user(){
		$data['telepon'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_telepon.php',$data);
	}
 
}