<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Pages extends CI_Controller{


	function __construct()
	{
		# code...
		parent:: __construct();
		if ($this->session->userdata('status')!='login') {
			redirect('login');
		}
	}

	function index(){
		$data['content']='content/vhome';
		$this->load->view('pages/template',$data);
	}
}

?>