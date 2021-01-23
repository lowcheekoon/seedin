<?php
class Item_Model extends My_Model {
	
	var $table = "item";
    public function __construct()
    {
        parent::__construct();
    }


	public function get_active_list() {
		$this->db->where('item_status', 1);
		return $this->get_list();
	}
}
?>