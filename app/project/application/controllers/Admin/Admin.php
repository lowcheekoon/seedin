<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
		$this->session->set_userdata('admin_id', 1);
		$this->online_admin->is_login();
		
		
		$this->load->model('Admin_Model', 'admin');
	//	$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		echo "dashboard";
	}
	
	
	
	
}