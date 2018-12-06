<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
    </html>


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
//global $company_offical_website, $contact_no
$gmail=$_COOKIE["ProjectCookie"];
//$password=$_REQUEST['password'];
echo("<div class=table-responsive>");
echo("<table class=table>");
echo("<thead><tr><th scope=col>Student Name</th><th scope=col>Last</th><th scope=col>Gmail</th><th scope=col>Address</th><th scope=col>10th percentage</th><th scope=col>12th percentage</th><th scope=col>BE percentage</th><th scope=col>Extra Skill</th></tr> </thead>");
$query=mysql_query("SELECT * FROM `clregistration` WHERE `gmail`='$gmail' ");
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
        
       
       $college_code="$arr[3]";
       //echo($college_code);
       $query1=mysql_query("SELECT * FROM `sregistration` WHERE `college_code`='$college_code' ");
        $query_num_rows1=mysql_num_rows($query1);
        while($arr=mysql_fetch_row($query1))
        {
          
           
           echo("<thead><tr><th scope=col>$arr[0]</th><th scope=col>$arr[3]</th><th scope=col>$arr[1]</th><th scope=col>$arr[6]</th><th scope=col>$arr[10]</th><th scope=col>$arr[11]</th><th scope=col>$arr[12]</th><th scope=col>$arr[13]</th></tr> </thead>");
           
          

    
        }
    }

}
echo("</table></div>");
?>
