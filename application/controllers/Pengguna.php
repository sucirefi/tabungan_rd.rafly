<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Pengguna extends CI_Controller{


	function __construct()
	{
		# code...
		parent:: __construct();
		if ($this->session->userdata('status')!='login') {
			redirect('login');
		}
	}

	function index(){
		$data['content']='content/pengguna/pengguna';
		$this->load->view('pages/template',$data);
	}
	function baru(){
		$data['content']='content/pengguna/baruPengguna';
		$this->load->view('pages/template',$data);
	}
	function edit($id){
		$data['u']=$this->db->get_where('user',['user_id'=>$id])->row();
		$data['content']='content/pengguna/editPengguna';
		$this->load->view('pages/template',$data);
	}
	function simpan(){
		$user=$this->input->post('user');
		$pass=$this->input->post('pass');
		$lvl=$this->input->post('lvl');

		$config=array(
			'upload_path'=>'./assets/dist/img/user/',
			'allowed_types' => 'png|jpg|gif|jpeg' );

		$this->load->library('upload',$config);
		if ($this->upload->do_upload('foto')) {
			$data=array(
				'user_user'=>$user,
				'user_pass'=>$pass,
				'user_level'=>$lvl,
				'user_foto'=>$this->upload->data('file_name')
				);
			$this->db->insert('user',$data);
			redirect('pengguna');
		}else{
			echo "gagal";
		}


	}
	function ubah(){
		$id=$this->input->post('id');
		$user=$this->input->post('user');
		$pass=$this->input->post('pass');
		$lvl=$this->input->post('lvl');

		$config=array(
			'upload_path'=>'./assets/dist/img/user/',
			'allowed_types' => 'png|jpg|gif|jpeg' );

		$this->load->library('upload',$config);
		if ($this->upload->do_upload('foto')) {
			$data=array(
				'user_user'=>$user,
				'user_pass'=>$pass,
				'user_level'=>$lvl,
				'user_foto'=>$this->upload->data('file_name')
				);
			$this->db->where('user_id',$id);
			$this->db->update('user',$data);
			redirect('pengguna');
		}else{
			echo "gagal";
		}

	}
	function hapus($id){
		$this->db->delete('user',['user_id'=>$id]);
		redirect('pengguna');
	}
}

?>