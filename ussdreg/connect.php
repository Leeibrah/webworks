<?php
$servername='localhost';/*connects to the database*/
$username='root';
$password='root';
$dbase='ussdreg';
$conn=mysql_connect($servername,$username,$password);
mysql_select_db($dbase,$conn);
?>
