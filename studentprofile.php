<script>

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    
    var usergmailId = getCookie("ProjectCookie");
    alert("the cookie value is --------> "+usergmailId);
    document.getElementById('form18').value = usergmailId;
     
    </script>

<?php
 $mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='wta';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db))
{
    die("error message");
}
?>



<?php
$gmail=$_COOKIE["ProjectCookie"];
//$password=$_REQUEST['password'];

$query=mysql_query("SELECT * FROM `sregistration` WHERE `gmail`='$gmail' ");
$query_num_rows=mysql_num_rows($query);
        
if($query_num_rows==0)
{
    require 'invalid.php';
    header("Refresh:6; url=slogin1.php"); 
    exit();

}
else
{
     while($arr=mysql_fetch_row($query))
    {
        
       $name="$arr[0]";
       $gmail="$arr[1]";
       $last="$arr[3]";
       $city="$arr[4]";
       $contact_no="$arr[5]";
       $address="$arr[6]";
       $age="$arr[8]";
       $school="$arr[10]";
       $tenthper="$arr[11]";
       $pucper="$arr[12]";
       $eng="$arr[13]";
       $Skill="$arr[13]";
       // require "studentindex.html";
       
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<style>
.bg-primary {
    background-color: #014656!important;
}
</style>
 
<div class="container">
<br><h2>Profile</h2>
 
  
  <div class="card bg-primary text-white">
    <div class="card-body">Name&nbsp;:&nbsp;<?php echo strtoupper("$name");?></div>
    <div class="card-body">Gmail&nbsp;:&nbsp;<?php echo strtoupper(" $gmail");?></div>
    <div class="card-body">City&nbsp;:&nbsp;<?php echo strtoupper("$city");?></div>
    <div class="card-body">Contact-Number&nbsp;:&nbsp;<?php echo strtoupper(" $contact_no");?></div>
    <div class="card-body">Address&nbsp;:&nbsp;<?php echo strtoupper(" $address");?></div>
    <div class="card-body">Age&nbsp;:&nbsp;<?php echo strtoupper("$age");?></div>
    <div class="card-body">Extra-Skill&nbsp;:&nbsp;<?php echo strtoupper(" $Skill");?></div>
    
  </div>
  <br>
  
 

</body>
</html>
