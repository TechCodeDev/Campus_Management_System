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

$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('wta') or die(mysql_error());

$CGPA=$_REQUEST['cgpa'];
$Link=$_REQUEST['link'];
$gmail=$_COOKIE["ProjectCookie"];


$query=mysql_query("SELECT * FROM `sregistration` WHERE `eng_agregrate` >= $CGPA");


$queris=mysql_query("SELECT * FROM `cmregistration` WHERE `gmail`= '$gmail' ");
$query_num_rows=mysql_num_rows($query);


//$result=mysql_query($query) or die(mysql_error());

if($query_num_rows==0)
{
    //require 'invalid.php';
    //header("Refresh:6; url=slogin1.php"); 
    //exit();

}
else
{
    while($arry=mysql_fetch_row($queris))
    {
       $name=$arry[0];//break;
    
     while($arr=mysql_fetch_row($query))
    {
            $querys= mysql_query("INSERT INTO post VALUES('','$arr[1]','$Link','$arr[0]',' $name')");
    }
}



}
//while($arry=mysql_fetch_row($queris))
  //  {
         //   $querysi= mysql_query("INSERT INTO post VALUES('','','','','$arry[0]')");
    //}
    //echo("Post Creation Sucess fully");


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

    <p class="card-text"><B>JOB POST CREATE SUCEEFULLY</B>.</p>
    
  </div>
</div>
</center>
</body>
</html>
