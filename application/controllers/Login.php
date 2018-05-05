<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller{


	function __construct()
	{
		# code...
		parent:: __construct();
		$this->load->model('Login_model');
	}

	function index(){
		if ($this->session->userdata('status')=='login') {
			redirect('pages');
		}
		$this->load->view('pages/login');
	}
	function cek_login(){
		if (isset($_POST['submit'])) {
			$user=$this->input->post('user',TRUE);
			$pass=$this->input->post('pass',TRUE);
			$cek=$this->Login_model->proseslogin($user,$pass);
			$hasil=count($cek);
			if ($hasil>0) {
				$data=array(
					'nama'=>$cek->user_user,
					'level'=>$cek->user_level,
					'foto'=>$cek->user_foto,
					'status'=>'login'
					);
				$this->session->set_userdata($data);
				redirect('pages');

			}else{
				redirect('login');
			}
		}

	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>