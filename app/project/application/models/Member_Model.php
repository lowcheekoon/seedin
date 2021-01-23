<?php
class Member_Model extends My_Model {
	
	var $table = "member";
    public function __construct()
    {
        parent::__construct();
    }

    function authentication($username, $password){
		$this->db->where('member_username', $username);
		$this->db->where('member_password', $password);
		$this->db->where('member_status', 1);
		
		return $this->db->get($this->table)->row();
	}
}
?>