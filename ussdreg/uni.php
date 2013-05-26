<?php
$cell_number = $_GET['MSISDN'];//get items from user
$session_id = $_GET['SESSION_ID'];
$service_code = $_GET['SERVICE_CODE'];
$ussd_string = $_GET['USSD_STRING'];

$level = 0;
$ussd_string = str_replace("#","*",$ussd_string);
$ussd_string_exploded = explode("*",$ussd_string);

$ussd_string_exploded2 = array_shift($ussd_string_exploded);

$level = count($ussd_string_exploded);//items in the array

if($level==0)
{
display_menu();
}
if($level>0){
switch($ussd_string_exploded[0])
{
     case 1:
     bscit($ussd_string_exploded,$phone);
	 case 2:
	 bsctel($ussd_string_exploded,$phone);
	  case 3:
	 foodsc($ussd_string_exploded,$phone);
	 case 4:
	 bcom($ussd_string_exploded,$phone);
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
function display_menu(){
$ussd_text="1.BSC IT</br>2.BSC TELECOM</br>3.BSC FOOD SCIENCE</br>4.BCOM";
ussd_proceed($ussd_text);
}
function bscit($details,$phone)
{
$c = $details[1];
if(count($details)==1)
{
//level one  in bsc it
$ussd_text = "1.FIRSTYEAR</br>2.SECOND YEAR</br>3.THIRDYEAR</br>4.FORTH YEAR</br>";
ussd_proceed($ussd_text);
}
if(count($details)==2)//level 2 in bsc it
{
if($c == 3){
$ussd_text = "1. First Semester<br/>2. Second Semester</br>
		3.Third Semester <br/>";
		ussd_proceed($ussd_text);
}

}
$c = $details[2];
if(count($details)==3)
{
if($c==2)
{
$ussd_text = "1.fees</br>2.Course Outline</br>";
		ussd_proceed($ussd_text);
}
}
$c = $details[3];
if(count($details)==4)
{
if($c==1)
{
$ussd_text="105,000kes";
ussd_proceed($ussd_text);
}
}

}
