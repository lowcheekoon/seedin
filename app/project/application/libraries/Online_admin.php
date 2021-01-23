<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Online_admin 
{
	var $ci 				= "",
		$isOnline 			= false,
		$adminInformation 	= null;
	
	function __construct()
	{
		$this->ci =& get_instance();
		$this->adminInformation = new stdClass();
	}
	
	
	function check_is_login()
	{
		$this->ci =& get_instance();
		if($this->ci->session->userdata('admin_id'))
		{
			$admin_id = $this->ci->session->userdata('admin_id');
			$this->set_admin_information($admin_id);
			$this->isOnline = true;
			return true;
		}
		
		return false;
	}
	
	
	function is_login()
	{
		if($this->check_is_login())
		{
			return true;
		}
		
		$this->destroy_session();
		redirect('admin/login');
	}
	
	
	function set_admin_information($admin_id = 0)
	{
		$this->adminInformation = $this->load_admin_information($admin_id);
	}
	
	
	function load_admin_information($admin_id = 0)
	{
		$ci = get_instance();
		$ci->load->model('Admin_Model', 'admin');
		$admin 				= new $ci->admin();
		return $admin->read($admin_id);
	}
	
	
	function destroy_session()
	{
		$ci = get_instance();
		$ci->session->sess_destroy();
		$this->isOnline = false;
	}
	
}