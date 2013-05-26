<?php
include('connect.php');

$cell_number = $_GET['MSISDN'];
$session_id = $_GET['SESSION_ID'];
$service_code = $_GET['SERVICE_CODE'];
$ussd_string = $_GET['USSD_STRING'];

$level = 0;
$ussd_string = str_replace("#","*",$ussd_string);
$ussd_string_exploded = explode("*",$ussd_string);
$ussd_string_exploded2 = array_shift($ussd_string_exploded);

//get level id from ussd_string reply
$level = count($ussd_string_exploded);

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
			register($ussd_string_exploded,$phone);
			break;
		case 2:
			retrieve($ussd_string_exploded,$phone);
			break;
	}
}	

function display_menu()
{
$ussd_text = "1. Register \n2. View details submitted";
ussd_proceed($ussd_text);
}

function register($details,$phone)
{
if(count($details) == 1)
	{
	$ussd_text = "Enter your first name:";
	ussd_proceed($ussd_text);
	}
	
if(count($details) == 2)
	{
	$ussd_text = "Enter your last name:";
	ussd_proceed($ussd_text);
	}
	
if(count($details) == 3)
	{
	$ussd_text = "Enter your gender:";
	ussd_proceed($ussd_text);
	}

if(count($details) == 4)
	{
	$firstname= $details[1];
	$lastname= $details[2];
	$mygender= $details[3];
	
	$query="INSERT INTO q1_reg (fname,lname,gender,phonenumber) VALUES ('$firstname','$lastname','$mygender','$phone')";
	$result=mysql_query($query);
	
	if($result)
	{	
	$ussd_text = "Registration Successful!!!";
	ussd_proceed($ussd_text);
	}
	else
	{
	$ussd_text = "Registration Failed!!!";
	ussd_proceed($ussd_text);
	}
}
}

function retrieve($details,$phone)
{
$query="Select * from q1_reg where phonenumber='$phone'";	
	$result=mysql_query($query);
	while($row=mysql_fetch_assoc($result))
	{
		$rid=$row['id'];
		$rfirstname=$row['fname'];
		$rlastname=$row['lname'];
		$rmygender=$row['gender'];
	}
	
	$ussd_text = "Registration Id:".$rid.".   First Name:".$rfirstname.".     Last Name:".$rlastname.".    Gender:".$rmygender.".";
	ussd_proceed($ussd_text);
	
}

function ussd_proceed($ussd_text)
{
echo "$ussd_text";
exit(0);
}

function ussd_stop($ussd_text)
{
echo "$ussd_text";
exit(0);
}

?>
