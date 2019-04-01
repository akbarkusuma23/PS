<?php
/**
 * 
 */
class Inventori_model extends CI_Model
{
	private $_tabel = "barang";
	public $kdbarang;
	public $nama;
	public $harga;
	public $stok;
	public $gambar;
	public $deskripsi;

	public function rules(){
		return[
			['field'=>'kdbarang',
			'rules'=>'required'],
			['field'=>'nama',
			'rules'=>'required'],
			['field'=>'stok',
			'rules'=>'numeric'],
		];
	}
	public function getAll()
	{
		return $this->db->get("$this->_tabel")->result();
	}
	public function getById($id)
	{
		return $this->db->get_where($this->_tabel,["kdbarang"=>$id])->row();
	}
	public function save()
	{
		$post = $this->input->post();
		$this->kdbarang = uniqid();
		$this->nama = $post["nama"];
		$this->harga = $post["harga"];
		$this ->stok = $post["stok"];
		$this ->gambar = $post["gambar"];
		$this->deskripsi = $post["deskripsi"]; 
		
		$this -> db ->insert("$this->_tabel",$this);
	}
	public function update()
	{
		# code...
		$post=$this->input->post();
		$this->kdbarang = $post["id"];
		$this->nama = $post["nama"];
		$this->harga = $post["harga"];
		$this ->stok = $post["stok"];
		$this ->gambar = $post["gambar"];
		$this->deskripsi = $post["deskripsi"];
		$this->db->update($this->_tabel,$this,array('kdbarang'=>$post["id"]));
	}
	public function delete()
	{
		# code...
		return $this->db->delete($this->_tabel,array('kdbarang'=>$id));
	}
}
?>