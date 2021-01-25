<?php
class My_Model extends CI_Model {
	
    public function __construct()
    {
        parent::__construct();
    }

    function create($data = array()) {
		$this->db->insert($this->db->dbprefix($this->table), $data);
		return $this->db->insert_id();
	}
	
	function read($id) {
        $this->db->from($this->db->dbprefix($this->table));
        $this->db->where($this->db->dbprefix($this->table) . "_id",$id);
		return $this->db->get()->row();
	}
	
	function update($data = array(), $id) {
		$this->db->where($this->db->dbprefix($this->table) . "_id", $id);
        return $this->db->update($this->db->dbprefix($this->table), $data);
	}
	
	function delete($id) {
		$this->db->where($this->db->dbprefix($this->table) . "_id", $id);
		return $this->db->delete($this->db->dbprefix($this->table));
	}
	
	function exist($id) {
		$data = $this->read($id);
		return !empty($data);
	}
	
	function for_update($id) {
		$sql = "SELECT * FROM `" . $this->db->dbprefix($this->table) . "` WHERE " . $this->db->dbprefix($this->table) . "_id" . " = " . $id . " FOR UPDATE";
		return $this->db->query($sql)->row();
	}
	
	function exist_in_table($table, $id) {
		$this->db->from($this->db->dbprefix($table));
        $this->db->where($this->db->dbprefix($table) . "_id", $id);
		return $this->db->count_all_results() > 0;
	}
	
	function args($args = array()) {
		if(isset($args["select"]) && $args["select"]) $this->db->select($args["select"]);
		if(isset($args["where"]) && $args["where"]) $this->db->where($args["where"]);
		if(isset($args["limit"]) && $args["limit"]) $this->db->limit($args["limit"][0],$args["limit"][1]);
		if(isset($args["sort"]) && $args["sort"]) 
			foreach($args["sort"] as $attr => $orderby)
				if($attr == "raw") 
					$this->db->order_by($orderby);
				else 
					$this->db->order_by($attr, strtoupper($orderby));
	}
	/*
	* USAGE: 
	* select: array('field1', 'field2', ..., 'fieldn')
	* where: array('field1' => 'value1', 'field2 !=' => 'value2', ...,'fieldn >' => valuen)
	* limit: array(start,offset)
	* sort: array('field1' => 'ASC', 'field2' => 'DESC', ...,'fieldn >' => 'ASC')
	*/
	function get_list($args = array()) {
		$this->args($args);
		$this->db->from($this->db->dbprefix($this->table));
		return $this->db->get()->result();
	}
	
	function get_row($args = array()) {
		$this->args($args);
		$this->db->from($this->db->dbprefix($this->table));
		return $this->db->get()->row();
	}
	
	function counts($args = array()) {
		$this->args($args);
		$this->db->from($this->db->dbprefix($this->table));
		return $this->db->count_all_results();
	}
}
?>