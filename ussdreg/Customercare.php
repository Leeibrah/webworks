<?php
$cell_number = $_GET['MSISDN'];
$session_id = $_GET['SESSION_ID'];
$service_code = $_GET['SERVICE_CODE'];
$ussd_string = $_GET['USSD_STRING'];

//set default level to zero
$level = 0;
$ussd_string = str_replace("#","*",$ussd_string);//Repalcing with 
$ussd_string_exploded = explode("*",$ussd_string);
//echo "orig". count($ussd_string_exploded)."<br/>";
$ussd_string_exploded2 = array_shift($ussd_string_exploded);//Shift index
//echo "result ".count($ussd_string_exploded)."<br><br/>";
//get level id from ussd_string reply
$level = count($ussd_string_exploded);//

$phone = $cell_number;

if($level == 0)
{
	display_menu();
}
if($level > 0)
{
	switch($ussd_string_exploded[0])
	{
		case 1:
			account($ussd_string_exploded,$phone);			
		break;
		
		case 2:
			Products($ussd_string_exploded,$phone);
		break;
		
	}	
}
function ussd_proceed($ussd_text)
{
echo $ussd_text;
exit(0);
}

function ussd_stop($ussd_text)
{
echo $ussd_text;
exit(0);
}

function display_menu()
{
$ussd_text = "1.My Account <br/>2. Product and Services";
ussd_proceed($ussd_text);
}

function account($details,$phone)
{
	$ussd_text = "1. Top Up<br/>2. Internet and Bundle Subscriptions
		<br/>3. Acount balance<br/>4. Sambaza";
	ussd_proceed($ussd_text);
	
}

function Products($details,$phone)
{
	$c = $details[1];
	if(count($details) == 1)
	{
		$ussd_text = "1. Bonga Points<br/>2. MASAA YA SMS<br/>
		3. Okoa Jahazi<br/>4. Skiza <br/>5. Semeni";
		ussd_proceed($ussd_text);
	}

	if(count($details) == 2)
	{
		if($c == 1)
		{
		$ussd_text = "1. to Enquire for Bonga Points<br/>
		2. to Redeem Bonga Points<br/>3. to enroll to Bonga Points";
		ussd_proceed($ussd_text);
		}
	}
}
?>