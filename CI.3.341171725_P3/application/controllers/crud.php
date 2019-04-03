<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['barang'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
    }
    function tambah(){
		$this->load->view('v_input');
    }
    function tambah_aksi(){
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
        $stokbarang = $this->input->post('stokbarang');
        $hargabarang = $this->input->post('hargabarang');
 
		$data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
            'stokbarang' => $stokbarang,
            'hargabarang' => $hargabarang
			);
		$this->m_data->input_data($data,'barang');
		redirect('crud/index');
    }
    function hapus($kdbarang){
		$where = array('kdbarang' => $kdbarang);
		$this->m_data->hapus_data($where,'barang');
		redirect('crud/index');
    }
    function edit($kdbarang){
        $where = array('kdbarang' => $kdbarang);
        $data['barang'] = $this->m_data->edit_data($where,'barang')->result();
        $this->load->view('v_edit',$data);
    }
    function update(){
        $kdbarang = $this->input->post('kdbarang');
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $stokbarang = $this->input->post('stokbarang');
        $hargabarang = $this->input->post('hargabarang');
     
        $data = array(
            'nama' => $nama,
            'deskripsi' => $deskripsi,
            'stokbarang' => $stokbarang,
            'hargabarang' => $hargabarang
        );
     
        $where = array(
            'kdbarang' => $kdbarang
        );
     
        $this->m_data->update_data($where,$data,'barang');
        redirect('crud/index');
    }
}