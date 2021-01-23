<?php
class Admin_Model extends My_Model {
	
	var $table = "admin";
    public function __construct()
    {
        parent::__construct();
    }

    function authentication($username, $password){
		$this->db->where('admin_username', $username);
		$this->db->where('admin_password', $password);
		$this->db->where('admin_status', 1);
		
		return $this->db->get($this->table)->row();
	}
}
?>