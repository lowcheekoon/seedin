<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Router class 
require APPPATH."third_party/MX/Router.php";
\system\libraries
 */
class My_Pagination extends CI_Pagination
{
	function __construct()
	{
		parent::__construct();
	}
	
	
	function normal($config = array())
	{
		$pagination = new CI_Pagination();
		
		$config['use_page_numbers'] 	= true;
		$config['page_query_string'] 	= true;
		$config["num_links"] 			= 5;
		
		$config["first_link"] 		= "First";
		$config["last_link"] 		= "Last";
		
		$config["full_tag_open"] 	= "<ul class='pagination pagination-circle pg-blue mb-0'>";
		$config["full_tag_close"] 	= "</ul>";
		
		$config["first_tag_open"] 	= "<li class='page-item'>";
		$config["first_tag_close"] 	= "</li>";
		
		$config["cur_tag_open"] 	= "<li class='page-item active'><a class='page-link'>";
		$config["cur_tag_close"] 	= "</a></li>";
		
		$config["last_tag_open"] 	= $config["first_tag_open"];
		$config["last_tag_close"] 	= $config["first_tag_close"];
		$config["next_tag_open"] 	= $config["first_tag_open"];
		$config["next_tag_close"] 	= $config["first_tag_close"];
		$config["prev_tag_open"] 	= $config["first_tag_open"];
		$config["prev_tag_close"] 	= $config["first_tag_close"];
		$config["num_tag_open"] 	= $config["first_tag_open"];
		$config["num_tag_close"] 	= $config["first_tag_close"];
		
		$config['attributes'] 		= array('class' => 'page-link');

		$pagination->initialize($config);
		
		return $pagination;
	}
	
}

/* end of file */
