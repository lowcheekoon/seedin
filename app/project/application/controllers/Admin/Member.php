<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
		$this->session->set_userdata('admin_id', 1);
		$this->online_admin->is_login();
		
		
		$this->load->model('Member_Model', 'member');
	//	$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		$data = array();
		$member = $this->member->get_list();
		$data["rows"] = $member;
		$data["page"] = "member/list";
		$this->load->view('admin/templates/page', $data);
	}
	
	function view($id = 0)
	{
		
		$row = $this->member->read($id);
		
		$data = array();
		$data["row"] = $row;
		$data["id"] = $id;
		$data["page"] = "member/view";
		$this->load->view('admin/templates/page', $data);
	}
	
	
	
	
}