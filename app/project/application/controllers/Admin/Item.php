<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends MY_Controller {
	
    var $error_meesage = "";
    
	function __construct()
	{
		parent::__construct();
		
		$this->session->set_userdata('admin_id', 1);
		$this->online_admin->is_login();
		
		$this->load->model('Item_Model', 'item');
	//	$this->output->enable_profiler(TRUE);
	}
	
	function index()
	{
		$data = array();
		$items = $this->item->get_list();
		$data["rows"] = $items;
		$data["page"] = "item/list";
		$this->load->view('admin/templates/page', $data);
	}
	
	
	function add()
	{
		
		if(trim($this->input->post('_method')) == 'POST') {
			$item_name = trim($this->input->post('item_name'));
			$item_price = trim($this->input->post('item_price'));
			
			$data = array();
			$data["item_name"] = $item_name;
			$data["item_price"] = $item_price;
			$data["item_status"] = 1;
			
			if($this->item->create($data)) {
				$this->session->set_flashdata('success', 'Add Item Success');
				redirect('admin/item');
			} else {
				$this->session->set_flashdata('error', 'Add Item Fail');
			}
			
		}
		
		$data = array();
		$data["page"] = "item/add";
		$this->load->view('admin/templates/page', $data);
	}
	
	
	function edit($id = 0)
	{
		
		if(trim($this->input->post('_method')) == 'PUT') {
			
			$item_name = trim($this->input->post('item_name'));
			$item_price = trim($this->input->post('item_price'));
			
			$data = array();
			$data["item_name"] = $item_name;
			$data["item_price"] = $item_price;
			
			if($this->item->update($data, $id)) {
				$this->session->set_flashdata('success', 'Edit Item Success');
				redirect('admin/item');
			} else {
				$this->session->set_flashdata('error', 'Edit Item Fail');
			}
			
		}
		
		$row = $this->item->read($id);
		
		$data = array();
		$data["row"] = $row;
		$data["id"] = $id;
		$data["page"] = "item/edit";
		$this->load->view('admin/templates/page', $data);
	}
	
	function view($id = 0)
	{
		
		$row = $this->item->read($id);
		
		$data = array();
		$data["row"] = $row;
		$data["id"] = $id;
		$data["page"] = "item/view";
		$this->load->view('admin/templates/page', $data);
	}
	
	function delete($id = 0)
	{
		
		$data = array();
		$data["item_status"] = 9;
		if($this->item->update($data, $id)) {
			$this->session->set_flashdata('success', 'Delete Item Success');
		} else {
			$this->session->set_flashdata('error', 'Delete Item Fail');
		}
		redirect('admin/item');
	}
	
	
	
	
}