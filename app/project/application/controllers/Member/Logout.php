<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
	}
	
	function index()
	{
		$this->online_member->destroy_session();
		redirect('member/login');
	}
	
	
}