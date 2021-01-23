<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Member_Model', 'member');
	//	$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		$this->online_member->destroy_session();
		
		$data = array();
		if(trim($this->input->post('_method')) == 'POST') {
			$username = trim($this->input->post('username'));
			$password = trim($this->input->post('password'));
			
			$data = array();
			$data["member_username"] = $username;
			$data["member_password"] = $password;
			$data["member_status"] = 1;
			
			if($this->member->create($data)) {
				$this->session->set_flashdata('success', 'Registration Success');
				redirect('member/login');
			} else {
				$this->session->set_flashdata('error', 'Registration Fail');
			}
		
		}
		
		$data = array();
		$data["page"] = "register/register";
		$this->load->view('member/templates/page', $data);
	}
	
	
	
	
}