<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('wta') or die(mysql_error());



$name=$_REQUEST['Name'];
$gmail=$_REQUEST['mail'];
$reg=$_REQUEST['register'];
$desc=$_REQUEST['desc'];

$query="INSERT INTO jobs VALUES('','$name','$gmail','$reg','$desc')";
$result=mysql_query($query) or die(mysql_error());
//echo("POST CREATE SUCESSFULLY")

//require 'sucess.php';


?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="src/css/bootstrap.min.css">
  <script src="src/javascript/jquery.min.js"></script>
  <script src="src/javascript/popper.min.js"></script>
  <script src="src/javascript/bootstrap.min.js"></script>
  <link rel="stylesheet" href="src/css/font-awesome.min.css">
  
<body>
    <center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="card w-75">
  <div class="card-body">

    <p class="card-text"><B>JOB POST CREATE SUCESSFULLY</B>.</p>
    
  </div>
</div>
</center>
</body>
</html>