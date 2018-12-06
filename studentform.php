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
//require 'connect.inc.php';





$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('wta') or die(mysql_error());

//$name=$_REQUEST['name'];
$last=$_REQUEST['last'];
$gmail=$_REQUEST['gmail'];

$city=$_REQUEST['city'];
$contact_no=$_REQUEST['contactno'];
$address=$_REQUEST['address'];

$dateofbirth=$_REQUEST['dateofbirth'];
$age=$_REQUEST['age'];
$school=$_REQUEST['school'];

$tenth_percentage=$_REQUEST['10thpercentage'];
$puc_percentage=$_REQUEST['pucpercentage'];
$eng_agregrate=$_REQUEST['engagregrate'];

$extra_skill=$_REQUEST['extraskill'];
$college_code=$_REQUEST['collegecode'];
$college_name=$_REQUEST['collegename'];

  

$query="UPDATE sregistration SET last='$last', city='$city', contact_no='$contact_no', address='$address', dateofbirth='$dateofbirth', age='$age', school='$school', tenth_percentage='$tenth_percentage', puc_percentage='$puc_percentage', eng_agregrate='$eng_agregrate', extra_skill='$extra_skill' , college_code='$college_code' , college_name='$college_name' WHERE gmail='$gmail'";
$result=mysql_query($query) or die(mysql_error());
echo("hai");
include 'sucessforprofileS1.php'









?> 