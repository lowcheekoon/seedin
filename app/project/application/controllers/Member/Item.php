<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
		$this->session->set_userdata('member_id', 1);
		$this->online_member->is_login();
		
		$this->load->model('Item_Model', 'item');
		$this->load->model('Cart_Model', 'cart');
	//	$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		$data = array();
		$items = $this->item->get_active_list();
		$data["rows"] = $items;
		$data["page"] = "item/list";
		$this->load->view('member/templates/page', $data);
	}
	
	function addToCart() {
		
		$member_id = $this->session->userdata('member_id');
		
		if(trim($this->input->post('_method')) == 'POST') {
			
			$item_id = trim($this->input->post('id'));
			
			$item = $this->item->read($item_id);
			
			$data = array();
			$data['cart_member_id'] = $member_id;
			$data['cart_status'] = 1;
			$data['cart_item_id'] = $item->item_id;
			$data['cart_item_name'] = $item->item_name;
			$data['cart_item_price'] = $item->item_price;
			
			$this->cart->create($data);
			
		}
		
		$data = array();
		$data['ok'] = "1";
		echo json_encode($data);
	}
	
	function mini_cart() {
		
		$member_id = $this->session->userdata('member_id');
		
		$data = array();
		$result = array();
		$items = array();
		$grand_total = 0.00;
		if($carts = $this->cart->get_mini_cart_list($member_id)) {
			foreach($carts as $cart) {
				$array = array();
				$array['name'] = $cart->cart_item_name;
				$array['price'] = $cart->cart_item_price;
				$array['qty'] = $cart->total_item;
				$array['total'] = $cart->total_price;
				$grand_total += $cart->total_price;
				
				$items[] = $array; 
			}
		}
		
		$result['items'] = $items;
		$result['total'] = $grand_total;

		$data['ok'] = "1";
		$data['result'] = $result;
		echo json_encode($data);
	}
	
	
	
	
	
	
	
	
}