<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('wta') or die(mysql_error());



$name=$_REQUEST['name'];
$gmail=$_REQUEST['email'];
$password=$_REQUEST['password'];
$College_code=$_REQUEST['College_code'];

$query="INSERT INTO clregistration VALUES('$name','$gmail','$password','$College_code','','','')";
$result=mysql_query($query) or die(mysql_error());

require 'sucess.php';


?>