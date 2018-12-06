<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('wta') or die(mysql_error());



$name=$_REQUEST['name'];
$gmail=$_REQUEST['email'];
$password=$_REQUEST['password'];

$query="INSERT INTO cmregistration VALUES('$name','$gmail','$password','','','','','')";
$result=mysql_query($query) or die(mysql_error());

require 'sucess.php';


?>