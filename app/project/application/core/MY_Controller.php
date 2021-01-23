<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
	
	var $start_count = 0;
	
	function __construct()
	{
		parent::__construct();
		$this->load_language();
	}
	
	
	function set_language($language = "english")
	{
		$this->session->set_userdata('language', $language);
		$this->load_language();
	}
	
	
	function load_language()
	{
		$language = $this->session->userdata('language');
		$language = $language ? $language : $this->config->item('language');
		$this->lang->load('common', $language);
	}
	
	
	function form_validation_ci() 
	{
		$this->form_validation->CI =& $this;
	}
	
	
	function set_offset_limit($object) 
	{
		$per_page		= $this->config->item('per_page');
		$page			= intval(trim($this->input->get_post("page")));
		$object->offset = $page ? ($page - 1)  * $per_page : 0;
		$object->limit 	= $per_page;
		
		$this->start_count = $object->offset;
	}
	
	
	function verify_mobile()
	{
		return true;
		if(!$this->functions->is_mobile())
		{
			$data["page"] = "error/invalid_mobile";
			$this->load->view(PLATFORM_TEMPLATE, $data);
		}
	}
	
	
	function verify_version()
	{
		if(!$this->functions->is_same_version())
		{
			$data["page"] = "error/invalid_version";
			$this->load->view(PLATFORM_TEMPLATE, $data);
		}
	}
	
	
	function verify_access_token()
	{
		$this->load->module('agency_mobile_access_module');
		
		$is_valid_access = $this->agency_mobile_access_module->is_valid_access();
		
		if(!$is_valid_access)
		{
			$data["page"] = "error/invalid_token";
			$this->load->view(PLATFORM_TEMPLATE, $data);
		} 
	}
	
	
	function create_access_token()
	{
		$this->load->module('agency_mobile_access_module');
		
		$agency_id 	= $this->session->userdata('agency_id');
		$this->agency_mobile_access_module->get_token_access($agency_id);
	}
	
	
	function verify_agency_id()
	{
		$session_agency_id 	= $this->session->userdata('agency_id');
		$post_agency_id 	= trim($this->input->post('agency_id'));
		$post_agency_id 	= $this->functions->string_descrytion($post_agency_id);
		
		
		if( empty($session_agency_id) || empty($post_agency_id) || $session_agency_id != $post_agency_id)
		{
			$data["page"] = "error/invalid_account";
			$this->load->view(PLATFORM_TEMPLATE, $data);
		} else 
		{
			$this->create_access_token();
		}
	}

}