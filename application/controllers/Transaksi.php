<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Transaksi extends CI_Controller{

	function __construct()
	{
		# code...
		parent:: __construct();
		if ($this->session->userdata('status')!='login') {
			redirect('login');
		}
	}
	function index(){
		$data['content']='content/transaksi/transaksi';
		$this->load->view('pages/template',$data);
	}
	function baru(){
		$data['content']='content/transaksi/baruTransaksi';
		$this->load->view('pages/template',$data);
	}
	function edit($id){
		$data['t']=$this->db->get_where('transasik',['transaksi_id'=>$id])->row();
		$data['content']='content/transaksi/editTransaksi';
		$this->load->view('pages/template',$data);
	}
	function view($id){
		$data['t']=$this->db->get_where('transasik',['transaksi_id'=>$id])->row();
		$data['content']='content/transaksi/viewTransaksi';
		$this->load->view('pages/template',$data);
	}
	public function simpandetail()
	{

		$id=$this->input->post('id');
		$simpan=$this->input->post('simpan');
		$ambil=$this->input->post('ambil');
		$entri=$this->input->post('entri');
			$data=array(
				'transaksi_tran_id'=>$id,
				'masuk'=>$simpan,
				'ambil'=>$ambil,
				'entri'=>$entri);

			$insert=$this->db->insert('transaksi_saldo',$data);
			if ($insert) {
				echo "<script>alert('berhasil');</script>";
				redirect('transaksi/view/'.$id);
			}else{
				echo "<script>alert('Gagal');</script>";redirect('transaksi/view/'.$id);

			}
		
	}
	function hapusdetail($id,$iid){
		$this->db->delete('transaksi_saldo',['transaksi_saldo_id'=>$id]);
		redirect('transaksi/view/'.$ii	d);
	}
	public function simpan()
	{
		$nasabah=$this->input->post('nasabah');
		$user=$this->input->post('user');
			$data=array('transaksi_nasabah'=>$nasabah,
				'transaksi_user'=>$user);

			$insert=$this->db->insert('transasik',$data);
			if ($insert) {
				echo "<script>alert('berhasil');</script>";
				redirect('transaksi');
			}else{
				echo "<script>alert('Gagal');</script>";redirect('transaksi/tambah');

			}
		
	}
	public function ubah()
	{
		$id=$this->input->post('id');
		$nasabah=$this->input->post('nasabah');
		$user=$this->input->post('user');
			$data=array('transaksi_nasabah'=>$nasabah,
				'transaksi_user'=>$user);

			$this->db->where('transaksi_id',$id);
			$insert=$this->db->update('transasik',$data);
			if ($insert) {
				echo "<script>alert('berhasil');</script>";
				redirect('transaksi');
			}else{
				echo "<script>alert('Gagal');</script>";redirect('transaksi/tambah');

			}
		
	}
	public function hapus($id){
		$this->db->delete('transasik',['transaksi_id'=>$id]);
		redirect('Transaksi');
	}
}

?>