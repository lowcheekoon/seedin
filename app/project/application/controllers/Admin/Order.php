<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
		$this->session->set_userdata('admin_id', 1);
		$this->online_admin->is_login();
		
		
		$this->load->model('Order_Model', 'order');
		$this->load->model('Order_Detail_Model', 'orderDetail');
	//	$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		$data = array();
		$orders = $this->order->get_all_member_list();
		$data["rows"] = $orders;
		$data["page"] = "order/list";
		$this->load->view('admin/templates/page', $data);
	}
	
	function view($id = 0)
	{
		
		$row = $this->order->get_member_detail($id);
		$row->order_details = $this->orderDetail->get_order_list($id);
		
		$data = array();
		$data["row"] = $row;
		$data["id"] = $id;
		$data["page"] = "order/view";
		$this->load->view('admin/templates/page', $data);
	}
	
	
	
	
}