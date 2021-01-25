<?php
class Cart_Model extends My_Model {
	
	var $table = "cart";
    public function __construct()
    {
        parent::__construct();
    }


	public function get_mini_cart_list($member_id = 0) {
		$this->db->select('cart_item_id, cart_item_name, cart_item_price');
		$this->db->select('count(cart_item_id) as `total_item`');
		$this->db->select('sum(cart_item_price) as `total_price`');
		$this->db->where('cart_status', 1);
		$this->db->where('cart_member_id', $member_id);
		$this->db->group_by('cart_item_id');
		return $this->get_list();
	}
	
	public function get_member_list($member_id = 0) {
		$this->db->where('cart_status', 1);
		$this->db->where('cart_member_id', $member_id);
		return $this->get_list();
	}
}
?>