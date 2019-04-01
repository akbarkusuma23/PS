<?php
/**
 * 
 */
class m_user extends CI_Model
{
	function realData()
	{
		# code...
		return $this->db->get('user');
	}
	function input_data($data,$table)
	{
		# code...
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table)
	{
		# code...
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table)
	{
		# code...
		return $this->db->get_where($where,$table);
	}
	function update_data($where,$data,$table)
	{
	$this->db->where($where);
	$this->db->update($table,$data);

	}
	function ceklogin($table,$where)
	{
		# code...
		return $this->db->get_where($table,$where);
	}
}
?>