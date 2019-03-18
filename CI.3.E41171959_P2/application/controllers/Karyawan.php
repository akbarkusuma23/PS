<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('mkaryawan');
	}

	function index(){
		$data['karyawan'] = $this->mkaryawan->ambil_data()->result();
		$this->load->view('v_karyawan.php',$data);
	}

}