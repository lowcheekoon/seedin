<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Member_Model', 'member');
	//	$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		$this->login();
	}
	
	
	function login()
	{
		$this->online_member->destroy_session();
		
		$data = array();
		if(trim($this->input->post('_method')) == 'POST') {
			$username = trim($this->input->post('username'));
			$password = trim($this->input->post('password'));
			$member = $this->member->authentication($username, $password);
			if($member) {
				$this->session->set_userdata("member_id", $member->member_id);
				redirect('member/item/');
			}
		}
		
		$data = array();
		$data["redirect"] = site_url("member/login");
		$data["page"] = "login/login";
		$this->load->view('member/templates/page', $data);
	}
	
	
	
}