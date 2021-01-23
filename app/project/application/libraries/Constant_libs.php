<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Constant_libs 
{
	function __construct()
    {
    }
	
	function map_client_status()
	{
		$map_client_status = array(
									'0' => 'Not Yet Contact',
									'1' => 'Contacting',
									'2' => 'Waiting',
									'3' => 'Success',
									'9' => 'Fail',
									);
									
		return $map_client_status;
	}
	
	
	function map_client_status_image()
	{
		$map_client_status_image = array(
									'0' => 'not_yet_contact.png',
									'1' => 'contacting.png',
									'2' => 'waiting.png',
									'3' => 'success.png',
									'9' => 'fail.png',
									);
									
		return $map_client_status_image;
	}
	
	
	function map_mobile_client_status()
	{
		$map_mobile_client_status = array(
										array(
												"status_id" 	=> "0",
												"status_name" 	=> "Not Yet Contact",
											),
										array(
												"status_id" 	=> "1",
												"status_name" 	=> "Contacting",
											),
										array(
												"status_id" 	=> "2",
												"status_name" 	=> "Waiting",
											),
										array(
												"status_id" 	=> "3",
												"status_name" 	=> "Success",
											),
										array(
												"status_id" 	=> "9",
												"status_name" 	=> "Fail",
											),
										);
									
		return $map_mobile_client_status;
	}
	
	
	function map_client_type()
	{
		$map_client_type = array(
								'0' => 'Unusable',
								'1' => 'Usable',
								);
									
		return $map_client_type;
	}
	
	
	function map_mobile_client_type()
	{
		$map_mobile_client_type = array(
										array(
												"type_id" 	=> "0",
												"type_name" => "Unusable",
											),
										array(
												"type_id" 	=> "1",
												"type_name" => "Usable",
											),
										);
									
		return $map_mobile_client_type;
	}
	
	
	function map_sms_status()
	{
		$map_sms_status = array(
									'1' => 'On',
									'9' => 'Off',
									);
									
		return $map_sms_status;
	}
	
	
	function map_sms_day_option()
	{
		$map_sms_day_option = array(
									'0' => 'Sunday',
									'1' => 'Monday',
									'2' => 'Tuesday',
									'3' => 'Wednesday',
									'4' => 'Thursday',
									'5' => 'Friday',
									'6' => 'Saturday',
									);
									
		return $map_sms_day_option;
	}
	
	
	function map_sms_dd_option()
	{
		$map_sms_day_option  	= array();
		$max_dd 				= 28;
		for($i=1; $i<=$max_dd; $i++)
		{
			$dd = $i < 10 ? "0" . $i : $i;
			$map_sms_day_option[$dd] = $dd;
		}
		
		return $map_sms_day_option;
	}
	
	
	function map_gender()
	{
		$map_gender = array(
							'male' 		=> 'Male',
							'female' 	=> 'Female',
							);
									
		return $map_gender;
	}
	
	
	function map_alarm_repeated()
	{
		$map_alarm_repeated = array(
									"0" => "No Repeat",
									"1" => "1 Times",
									"2" => "2 Times",
									"3" => "3 Times",
									"4" => "4 Times",
									);
									
		return $map_alarm_repeated;
	}
	
	
	function map_12_hour()
	{
		$map_12_hour = array(
							"01" => "01",
							"02" => "02",
							"03" => "03",
							"04" => "04",
							"05" => "05",
							"06" => "06",
							"07" => "07",
							"08" => "08",
							"09" => "09",
							"10" => "10",
							"11" => "11",
							"12" => "12",
							);
									
		return $map_12_hour;
	}
	
	
	function map_mobile_12_hour()
	{
		$map_12_hour = array(
							array(
								"12_hour_id" 	=> "01",
								"12_hour_name" 	=> "01",
								),
							array(
								"12_hour_id" 	=> "02",
								"12_hour_name" 	=> "02",
								),
							array(
								"12_hour_id" 	=> "03",
								"12_hour_name" 	=> "03",
								),
							array(
								"12_hour_id" 	=> "04",
								"12_hour_name" 	=> "04",
								),
							array(
								"12_hour_id" 	=> "05",
								"12_hour_name" 	=> "05",
								),
							array(
								"12_hour_id" 	=> "06",
								"12_hour_name" 	=> "06",
								),
							array(
								"12_hour_id" 	=> "07",
								"12_hour_name" 	=> "07",
								),
							array(
								"12_hour_id" 	=> "08",
								"12_hour_name" 	=> "08",
								),
							array(
								"12_hour_id" 	=> "09",
								"12_hour_name" 	=> "09",
								),
							array(
								"12_hour_id" 	=> "10",
								"12_hour_name" 	=> "10",
								),
							array(
								"12_hour_id" 	=> "11",
								"12_hour_name" 	=> "11",
								),
							array(
								"12_hour_id" 	=> "12",
								"12_hour_name" 	=> "12",
								),
							);
									
		return $map_12_hour;
	}
	
	
	function map_24_hour()
	{
		$map_24_hour = array(
							"00" => "00",
							"01" => "01",
							"02" => "02",
							"03" => "03",
							"04" => "04",
							"05" => "05",
							"06" => "06",
							"07" => "07",
							"08" => "08",
							"09" => "09",
							"10" => "10",
							"11" => "11",
							"12" => "12",
							"13" => "13",
							"14" => "14",
							"15" => "15",
							"16" => "16",
							"17" => "17",
							"18" => "18",
							"19" => "19",
							"20" => "20",
							"21" => "21",
							"22" => "22",
							"23" => "23",
							);
									
		return $map_24_hour;
	}
	
	
	function map_minutes()
	{
		$map_minutes = array();
		
		for($i=0; $i<60; $i++)
		{
			$zero 				= $i < 10 ? "0" : ""; 
			$m 					= $zero . $i;
			$map_minutes[$m] 	= $m;
		}
		
		return $map_minutes;
	}
	
	
	function map_mobile_minutes()
	{
		$map_minutes = array();
		
		for($i=0; $i<60; $i++)
		{
			$zero 				= $i < 10 ? "0" : ""; 
			$m 					= $zero . $i;
			$map_minutes[] 		= array(
										"minutes_id" 	=> $m,
										"minutes_name" 	=> $m,
										);
		}
		
		return $map_minutes;
	}
	
	
	function map_am_pm()
	{
		$map_am_pm = array(
							"AM" => "AM",
							"PM" => "PM",
							);
									
		return $map_am_pm;
	}
	
	
	function map_mobile_am_pm()
	{
		$map_am_pm = array(
							array(
								"am_pm_id" 		=> "AM",
								"am_pm_name" 	=> "AM",
								),
							array(
								"am_pm_id" 		=> "PM",
								"am_pm_name" 	=> "PM",
								),
							);
									
		return $map_am_pm;
	}
	
	
	function map_event_reminder()
	{
		$map_event_reminder = array(
									"0" => "No Alarm",
									"1" => "1 Hour Before",
									"2" => "2 Hours Before",
									"6" => "6 Hours Before",
									"12" => "12 Hours Before",
									"24" => "1 Day Before",
									);
									
		return $map_event_reminder;
	}
	
	
	function map_mobile_event_reminder()
	{
		$map_event_reminder = array(
									array(
										"event_reminder_id" 	=> "0",
										"event_reminder_name" 	=> "No Alarm",
										),
									array(
										"event_reminder_id" 	=> "1",
										"event_reminder_name" 	=> "1 Hour Before",
										),
									array(
										"event_reminder_id" 	=> "2",
										"event_reminder_name" 	=> "2 Hour Before",
										),
									array(
										"event_reminder_id" 	=> "6",
										"event_reminder_name" 	=> "6 Hour Before",
										),
									array(
										"event_reminder_id" 	=> "12",
										"event_reminder_name" 	=> "12 Hour Before",
										),
									array(
										"event_reminder_id" 	=> "24",
										"event_reminder_name" 	=> "1 Day Before",
										),
									);
									
		return $map_event_reminder;
	}
	
	
	function map_on_off()
	{
		$map_on_off = array(
							'0' => 'Off',
							'1' => 'On',
							);
									
		return $map_on_off;
	}
	
	
	function map_agency_event_status()
	{
		$map_agency_event_status = array(
										'1' => 'On',
										'9' => 'Off',
										);
									
		return $map_agency_event_status;
	}
	
	
	function map_language()
	{
		$map_language = array(
								'english' => 'english',
								'chinese' => 'chinese',
							);
									
		return $map_language;
	}
	
	
	function map_sms_instant_customize()
	{
		$map_sms_instant_customize = array(
										'0' => 'Not Customize',
										'1' => 'Customize',
										);
									
		return $map_sms_instant_customize;
	}
	
	
	function map_target_status()
	{
		$map_target_status = array(
									'1' => 'Active',
									'2' => 'Achieved',
									'8' => 'Failed',
									'9' => 'Inactive',
									);
									
		return $map_target_status;
	}
	
	
	function map_agency_status()
	{
		$map_agency_status = array(
									'0' => 'Pending',
									'1' => 'Active',
									'9' => 'Inactive',
									);
									
		return $map_agency_status;
	}
	
	
	function map_mobile_agency_status()
	{
		$map_mobile_agency_status = array(
										array(
												"agency_status_id" 		=> "0",
												"agency_status_name" 	=> "Pending",
											),
										array(
												"agency_status_id" 		=> "1",
												"agency_status_name" 	=> "Active",
											),
										array(
												"agency_status_id" 		=> "9",
												"agency_status_name" 	=> "Inactive",
											),
										);
									
		return $map_mobile_agency_status;
	}
	
	
	function map_trax_mode()
	{
		$map_trax_mode = array(
								'1' => 'Advance',
								'2' => 'Simple',
								);
									
		return $map_trax_mode;
	}
	
	
	function map_trax_mode_display()
	{
		$map_trax_mode_display = array(
										'1' => 'Advance (Recommended)',
										'2' => 'Simple',
										);
									
		return $map_trax_mode_display;
	}
	
	
	function map_mobile_trax_mode_display()
	{
		$map_mobile_trax_mode_display = array(
										array(
												"trax_mode_id" 		=> "1",
												"trax_mode_name" 	=> "Advance (Recommended)",
											),
										array(
												"trax_mode_id" 		=> "2",
												"trax_mode_name" 	=> "Simple",
											),
										);
									
		return $map_mobile_trax_mode_display;
	}
	
	
	function map_payment_status()
	{
		$map_client_status_image = array(
									'1' => "Pending",
									'4' => "Paid",
									'9' => "Canceled",
									);
									
		return $map_client_status_image;
	}
	
	
	function map_mobile_payment_status()
	{
		$map_mobile_payment_status = array(
										array(
												"status_id" 	=> "1",
												"status_name" 	=> "Pending",
											),
										array(
												"status_id" 	=> "4",
												"status_name" 	=> "Paid",
											),
										array(
												"status_id" 	=> "9",
												"status_name" 	=> "Canceled",
											),
										);
									
		return $map_mobile_payment_status;
	}
	
	
	function map_admin_status()
	{
		$map_admin_status = array(
								'0' => "Pending",
								'1' => "Active",
								'8' => "Suspend",
								'9' => "Inactive",
								);
									
		return $map_admin_status;
	}
	
	
	function map_package_status()
	{
		$map_package_status = array(
								'0' => "Inactive",
								'1' => "Active",
								);
									
		return $map_package_status;
	}
	
	
	
}