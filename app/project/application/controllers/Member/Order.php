<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
		$this->session->set_userdata('member_id', 1);
		$this->online_member->is_login();
		
		$this->load->model('Item_Model', 'item');
		$this->load->model('Cart_Model', 'cart');
		$this->load->model('Order_Model', 'order');
		$this->load->model('Order_Detail_Model', 'orderDetail');
	//	$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		$member_id = $this->session->userdata('member_id');
		
		$data = array();
		$orders = $this->order->get_member_list($member_id);
		$data["rows"] = $orders;
		$data["page"] = "order/list";
		$this->load->view('member/templates/page', $data);
		
	}
	
	function to_pay($id) {
		
		$member_id = $this->session->userdata('member_id');
		
		if(!$order = $this->order->read($id)) {
			$this->session->set_flashdata('error', 'Order Not Found');
			redirect("member/order");
		}
		
		$data = array();
		$data["row"] = $order;
		$data["page"] = "order/to_pay";
		$this->load->view('member/templates/page', $data);
	}
	
	function pay($id) {
		
		if(trim($this->input->post('_method')) == 'PUT') {
			$payment_method = trim($this->input->post('payment_method'));
			if($order = $this->order->for_update($id)) {
				$data = array();
				$data['order_status'] = 2;
				$data['order_payment_method'] = $payment_method;
				if($this->order->update($data, $id)) {
					$this->session->set_flashdata('success', 'Payment Success');
					redirect("member/order");
				}
			}
		}
		
		$this->session->set_flashdata('error', 'Payment Fail');
		redirect("member/order");
	}
	
	
	
	
	
	
	
}