<?php
?>
<!--<script>

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
alert("the cookie value is *****> "+usergmailId);
document.getElementById('form18').value = usergmailId;
 
</script>
-->

<!DOCTYPE html>
<html lang="en">

<?php include 'src/includes/header.php';?>

<body>
 
<div class="container"><br>
<center>
  <h4>Appraisals for job interview</h4>
</center>
  <br>
     
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

$query=mysql_query("SELECT * FROM `post` WHERE `gmail`='$gmail' ");
$query_num_rows=mysql_num_rows($query);
        
if($query_num_rows==0)
{
    echo"<center>";
    echo"<h4>No Appraisals for interview</h4>";
  echo"</center>";
    //require 'invalid.php';
    //header("Refresh:6; url=slogin1.php"); 
    exit();

}
else
{
     while($arr=mysql_fetch_row($query))
    {
        echo '<div class="card bg-primary text-white">
                <div class="card-body">';               
        echo "Dear  ", strtoupper($arr[3]); echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;";echo "&nbsp;&nbsp;&nbsp;";echo"We are happy to inform you get apprisal from ",strtoupper($arr[4]);
        echo "&nbsp;Please register for interview using the follow the link &nbsp;&nbsp;&nbsp;",$arr[2];
        echo" we inform futher more information through your mail id&nbsp;",$arr[1],"<br>";echo "<br>";
        echo '<span style="color:red;font-size:20px;margin-top: 1px;margin-right: 2px;position:absolute;top:0;right:0;">
                <button onclick="deleteJob(';echo $arr[0];echo ');"><b>';echo"x";echo '</b></button></span>';
        echo"</div></div> <br> ";
      
       // require "studentindex.html";
       
    }

}
?>
  <br>

  <?php
  //global $id,$query;
  $id = isset($_POST['id']) ? $_POST['id'] : '';
  if($id>0){
    $query=mysql_query("DELETE FROM `post` WHERE `id`=$id");
    //header("Refresh:2; url=interviewstudent.php");
}

  ?>
  <script>
function deleteJob(idval)
{
    //alert("you are trying to delete the job with id "+idval);
    $.ajax({
    type: "POST",
    url: "interviewstudent.php",
    data: { id: idval }
    }).done(function( msg ) {
        location.reload();
    //alert( "Data Saved: " + msg );
    
    });    
}
</script>
</body>
</html>
