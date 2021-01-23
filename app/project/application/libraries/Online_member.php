<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Online_member 
{
	var $ci 				= "",
		$isOnline 			= false,
		$memberInformation 	= null;
	
	function __construct()
	{
		$this->ci =& get_instance();
		$this->memberInformation = new StdClass();
	}
	
	
	function check_is_login()
	{
		$this->ci =& get_instance();
		
		if($this->ci->session->userdata('member_id'))
		{
			$member_id = $this->ci->session->userdata('member_id');
			$this->set_member_information($member_id);
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
		redirect('member/login');
	}
	
	
	function set_member_information($member_id = 0)
	{
		$this->memberInformation = $this->load_member_information($member_id);
	}
	
	
	function load_member_information($member_id = 0)
	{
		$ci = get_instance();
		$ci->load->model('Member_Model', 'member');
		$member 			= new $ci->member();
		return $member->read($member_id);
	}
	
	
	function destroy_session()
	{
		$ci = get_instance();
		$ci->session->sess_destroy();
		$this->isOnline = false;
	}
	
}