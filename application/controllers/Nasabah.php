<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Nasabah extends CI_Controller{


	function __construct()
	{
		# code...
		parent:: __construct();
		if ($this->session->userdata('status')!='login') {
			redirect('login');
		}
	}

	function index(){
		$data['content']='content/nasabah/nasabah';
		$this->load->view('pages/template',$data);
	}
	function baru(){
		$data['content']='content/nasabah/baruNasabah';
		$this->load->view('pages/template',$data);
	}
	function edit($id){
		$data['n']=$this->db->get_where('nasabah',['nasabah_id'=>$id])->row();
		$data['content']='content/nasabah/editNasabah';
		$this->load->view('pages/template',$data);
	}
	function simpan(){
		$nama=$this->input->post('nama');
		$jk=$this->input->post('jk');
		$nomer=$this->input->post('nomer');
		$alamat=$this->input->post('alamat');

			$data=array(
				'nasabah_nama'=>$nama,
				'nasabah_jk'=>$jk,
				'nasabah_notel'=>$nomer,
				'nasabah_alamat'=>$alamat);
			$insert=$this->db->insert('nasabah',$data);
			if ($insert) {
				echo "<script>alert('berhasil');</script>";
				redirect('nasabah');
			}else{
				echo "<script>alert('Gagal');</script>";redirect('nasabah/tambah');

			}
	}
	function ubah(){
		$id=$this->input->post('id');
		$nama=$this->input->post('nama');
		$jk=$this->input->post('jk');
		$nomer=$this->input->post('nomer');
		$alamat=$this->input->post('alamat');

			$data=array(
				'nasabah_nama'=>$nama,
				'nasabah_jk'=>$jk,
				'nasabah_notel'=>$nomer,
				'nasabah_alamat'=>$alamat);
			$this->db->where('nasabah_id',$id);
			$insert=$this->db->update('nasabah',$data);
			if ($insert) {
				echo "<script>alert('berhasil');</script>";
				redirect('nasabah');
			}else{
				echo "<script>alert('Gagal');</script>";redirect('nasabah/tambah');

			}
	}
	function hapus($id){
		$this->db->delete('nasabah',['nasabah_id'=>$id]);
		redirect('nasabah');
	}
}

?>