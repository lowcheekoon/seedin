<?php
class Order_Model extends My_Model {
	
	var $table = "order";
    public function __construct()
    {
        parent::__construct();
    }

	function get_member_list($member_id = 0) {
		$this->db->where('order_member_id', $member_id);
		return $this->get_list();
	}
	
	function get_all_member_list() {
	
		$this->db->join(
			"member", 
			'member_id = order_member_id', 
			'left'
		);
		
		return $this->get_list();
	}
	
	function get_member_detail($id) {
	
		$this->db->join(
			"member", 
			'member_id = order_member_id', 
			'left'
		);
		
		return $this->read($id);
	}

	
}
?>