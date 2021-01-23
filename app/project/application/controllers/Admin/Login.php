<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Admin_Model', 'admin');
	//	$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		$this->login();
	}
	
	
	function login()
	{
		$this->online_admin->destroy_session();
		
		$data = array();
		if(trim($this->input->post('_method')) == 'POST') {
			$username = trim($this->input->post('username'));
			$password = trim($this->input->post('password'));
			$admin = $this->admin->authentication($username, $password);
			if($admin) {
				$this->session->set_userdata("admin_id", $admin->admin_id);
				redirect('admin/item/');
			}
		}
		
		$data = array();
		$data["redirect"] = site_url("admin/login");
		$data["page"] = "login/login";
		$this->load->view('admin/templates/page', $data);
	}
	
	
	
}