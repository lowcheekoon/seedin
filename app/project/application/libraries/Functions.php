<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions 
{
	function __construct()
    {
    }
	
	function string_encryption($str)
	{
		if (version_compare(PHP_VERSION, '7.0.0') >= 0){
			return $this->encrypt_PHP_VERSION_7_above($str);
		} else {
			$ci = get_instance();
			do
			{
				$string = $ci->encrypt->encode($str);
			} while(strstr($string, "+") || strstr($string, "/"));
			
			return $string;
		}
	}
	
	
	function string_descrytion($str)
	{
		if (version_compare(PHP_VERSION, '7.0.0') >= 0){
			return $this->descrypt_PHP_VERSION_7_above($str);
		} else {
			$ci = get_instance();
			$string = $ci->encrypt->decode($str);
			
			return $string;
		}
	}
	
	
	function encrypt_PHP_VERSION_7_above($str)
	{
		$ci = get_instance();
		$cipher = "AES-128-CBC";
		$ivlen = openssl_cipher_iv_length($cipher);
		$iv = openssl_random_pseudo_bytes($ivlen);
		return openssl_encrypt ($str, $cipher, $ci->config->item('encryption_key'), OPENSSL_RAW_DATA, $iv);
	}
	
	
	function descrypt_PHP_VERSION_7_above($str)
	{
		$ci = get_instance();
		$cipher = "AES-128-CBC";
		$ivlen = openssl_cipher_iv_length($cipher);
		$iv = openssl_random_pseudo_bytes($ivlen);
		return openssl_decrypt ($str, $cipher, $ci->config->item('encryption_key'), OPENSSL_RAW_DATA, $iv);
	}
	
	
	function check_date($date)
	{
		$date = str_replace(array("/"), "-", $date);
		
		if($date == date('Y-m-d', strtotime($date)))
		{
			return true;
		}
		
		return false;
	}
	
	
	function check_time($hour, $minute, $second) 
	{
		if($hour < 0 || $hour > 23 || !is_numeric($hour)) 
		{
			return false;
		}
		if($minute < 0 || $minute > 59 || !is_numeric($minute)) 
		{
			return false;
		}
		if($second < 0 || $second > 59 || !is_numeric($second)) 
		{
			return false;
		}
		 
		return true;
	}
	
	
	function check_datetime($datetime)
	{
		$datetime 	= str_replace(array("/"), "-", $datetime);
		$dt			= explode(" ", $datetime);
		
		if(sizeof($dt)!=2)
		{
			return false;
		}
		
		if(!$this->check_date($dt[0]))
		{
			return false;
		}
		
		$t = explode(":", $dt[1]);
			
		return $this->check_time($t[0], $t[1], $t[2]);
	}
	
	
	function check_year_yyyy($year)
	{
		$year = intval($year);
		return $year >= 1000 && $year <= 9999;
	}
	
	
	function check_month_m($month)
	{
		$array = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
		$month = strlen($month)==1 ? "0" . $month : $month;
		return in_array($month, $array);
	}
	
	
	function page_properties($total_record = 0)
	{
		$ci 			= get_instance();
		$data 			= array();
		$per_page		= $ci->config->item('per_page');
		$page			= intval(trim($ci->input->get_post("page")));

		$totalPage		= ceil($total_record/$per_page);
		$page			= $page > $totalPage ? $totalPage : $page;
		$currentPage	= $page ? $page : 1;
		
		$data["currentPage"]	= $currentPage;
		$data["totalPage"] 		= $totalPage;
		$data["totalRecord"] 	= $total_record;
		
		return $data;
	}
	
	
	function is_post_request()
	{
		$ci 			= get_instance();
		$PostRequest 	= trim($ci->input->post("PostRequest"));
		return $PostRequest=="1";
	}
	
	
	function random_alphanumeric($length = 8, $keyspace = "")
	{
		$string = "";
		
		if(empty($keyspace))
		{
			$keyspace = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		}
		
		if(bccomp($length, "0") != 1)
		{
			$length = 8;
		}
		
		$strlen = strlen($keyspace);
		for ($i = 0; $i < $length; $i++) 
		{
			$string .= $keyspace[rand(0, $strlen - 1)];
		}
		
		return $string;
	}
	
	
	function is_cloudflare() 
	{
		$is_cloudflare = false;
		$is_cloudflare = isset($_SERVER['HTTP_CF_CONNECTING_IP']) && !empty($_SERVER['HTTP_CF_CONNECTING_IP']);
		
		return $is_cloudflare;
	}
	
	
	function generate_pulze_hashcode($params = array())
	{
		$query_string = http_build_query($params, null, '&'); 
		if(!defined('PHP_QUERY_RFC3986')) define('PHP_QUERY_RFC3986', 2);   
		$hash_code = hash_hmac('sha256', $query_string, PULZE_SECRET_KEY);

		return $hash_code;
	}

	
}