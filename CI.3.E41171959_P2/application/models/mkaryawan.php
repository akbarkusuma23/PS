<?php 

class MKaryawan extends CI_Model{
	function ambil_data(){
		return $this->db->get('karyawan');
	}
}
?>