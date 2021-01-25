<?php
class Order_Detail_Model extends My_Model {
	
	var $table = "order_detail";
    public function __construct()
    {
        parent::__construct();
    }

	function get_order_list($order_id = 0) {
		
		$this->db->where('order_detail_order_id', $order_id);
		$this->db->where('order_detail_status', 1);
		
		return $this->get_list();
	}
	
}
?>