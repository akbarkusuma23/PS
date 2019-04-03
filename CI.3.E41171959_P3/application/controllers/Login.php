<?php
/**
 * 
 */
class Login extends CI_Controller
{
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('m_user');
	}
	function index()
	{
		# code...
		$this->load->view('admin/login');
	}
	function login_aksi()
	{
		# code...
		$username=$this->input->post('user');
		$pass=$this->input->post('pass');

		$where = array(
			'username'=>$username,
			'password'=>$pass
		);
		$cek=$this->m_user->ceklogin("karyawan",$where)->num_rows();
		if($cek>0){
			$data_session = array(
				'username' => $username,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect('admin');
		}
		else{
			echo "salah mas";
		}
	}
}
?>