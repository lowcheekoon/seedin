<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller {
	
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
		
		$items = array();
		$this->db->trans_begin();
		$success = false;
		if($carts = $this->cart->get_member_list($member_id)) {
			foreach($carts as $i => $cart) {
				
				if($cart = $this->cart->for_update($cart->cart_id)) {
					$data = array();
					$data['cart_status'] = 2;
					$success = $this->cart->update($data, $cart->cart_id);
					
					if(!isset($items[$cart->cart_item_id])) {
						$items[$cart->cart_item_id]['quantity'] = 0;
					}
					
					$items[$cart->cart_item_id]['quantity'] += 1;
					$items[$cart->cart_item_id]['name'] = $cart->cart_item_name;
					$items[$cart->cart_item_id]['price'] = $cart->cart_item_price;
					
				}
				
				if(!$success) {
					break;
				}
			}
		}
		
		if($success && $items) {
			
			$data = array();
			$data['order_member_id'] = $member_id;
			$data['order_status'] = 1;
			$data['order_vourcher_code'] = "";
			$data['order_amount'] = array_sum(
										array_map(
											function($item){
												return $item['quantity'] * $item['price'];
											}, 
										$items
										)
									);
			$data['order_discount'] = 0;
			$data['order_payment_method'] = '';
			
			if($order_id = $this->order->create($data)) {
				foreach($items as $item_id => $item) {
					
					$data = array();
					$data['order_detail_order_id'] = $order_id;
					$data['order_detail_status'] = 1;
					$data['order_detail_item_id'] = $item_id;
					$data['order_detail_item_name'] = $item["name"];
					$data['order_detail_quantity'] = $item["quantity"];
					$data['order_detail_item_price'] = $item["price"];
					$data['order_detail_discount'] = 0;
					$data['order_detail_amount'] = $item["quantity"] * $item["price"];
					
					$order_detail_id = $this->orderDetail->create($data);
					if(!$success = $order_detail_id > 0) {
						break;
					}
					
				}
			}
		}
		
		if($success){ 
			$this->db->trans_commit();
			redirect("member/order/to_pay/" . $order_id);
		} else {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error', 'Fail To Checkout');
			redirect("member/item");
		}
		
		
	}
	
	
	
	
	
	
	
}