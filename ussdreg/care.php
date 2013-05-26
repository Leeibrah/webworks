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
$level = count($ussd_string_exploded);// the count fxn gives all the items in the array

$phone = $cell_number;

if($level == 0)
{
	display_menu();
}
if($level > 0)
{
	switch($ussd_string_exploded[0])//the exploded wil b the positions and the cases are what the user enters
	{
		case 1:
			account($ussd_string_exploded,$phone);			//user selection and the 4ne number
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
$ussd_text = "1.My Account <br/>2. Product and Services <br/>3. Internet and Bundle Subscriptions<br/>4. MPESA ";
ussd_proceed($ussd_text);
}

function account($details,$phone)
{
$c = $details[1];
if(count($details) == 1)
{
	$ussd_text = "1. Top Up<br/>2. Acount balance
		<br/>3. Sambaza";
	ussd_proceed($ussd_text);
	}
	if(count($details)==1){
	$c = $details[2];
	$ussd_text = "please dial *144#";
     ussd_proceed($ussd_text); }
	
	if(count($details)==1)
	$c = $details[3];
	$ussd_text = "please dial *140*amount*number#";
ussd_proceed($ussd_text);

}

function Products($details,$phone)
{
	$c = $details[1];//indicates level 1 and keeps track of which level we are in
	if(count($details) == 1)
	{
		$ussd_text = "1. Bonga Points<br/>2. MASAA YA SMS<br/>
		3. Okoa Jahazi<br/>4. Skiza <br/>5. Semeni";
		ussd_proceed($ussd_text);
	}
	
	if(count($details) ==2)
	{
	if($c == 1)
	{
	$ussd_text = "1. To enquire for bonga points<br/> 2. To redeem bonga points<br/>3. To register for bonga points";
	ussd_proceed($ussd_text);
	}
	
	
	if(count($details) == 2)
	{
		if($c == 2)
		{
		$ussd_text = "1. to get unlimited sms<br/>
		2. To get 20 sms's";
		ussd_proceed($ussd_text);
		}
		else if($c == 3)
		{
		$ussd_text = "dial *131#";
		ussd_proceed($ussd_text);
		}
	}
	
}
$c = $details[2];//tracking the level wher command($c==2) is coming from .
if(count($details) ==3)//this is the level we are  sending to.
	{
	if($c == 2)//the item from the previous level that we are interested in.
	{
	$ussd_text = "1.free minutes<br/>2. free sms<br>3.free calls<br>4.backhome</br>";
	ussd_proceed($ussd_text);
}
}

$c = $details[3];//tracking the level wher command($c==2) is coming from .
if(count($details) ==4)//this is the level we are  sending to.
	{
	if($c == 1)//the item from the previous level that we are interested in.
	{
	$ussd_text = "you dont have enof money,......idiot";
	ussd_proceed($ussd_text);
	}
	}
}
?>