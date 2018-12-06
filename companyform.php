<?php






$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('wta') or die(mysql_error());

$gmail=$_REQUEST['gmail'];
$Company_offical_website=$_REQUEST['Company_offical_website'];
$Phone_Number=$_REQUEST['Phone-Number'];

$No_of_employes=$_REQUEST['No_of_employes'];
$Domain=$_REQUEST['Domain'];
$Clients=$_REQUEST['Clients'];



  

$query="UPDATE cmregistration  SET Company_offical_website='$Company_offical_website', Phone_Number='$Phone_Number', No_of_employes='$No_of_employes', Domain='$Domain', Clients='$Clients' WHERE gmail='$gmail'";
$result=mysql_query($query) or die(mysql_error());
include 'sucessforprofileS1.php'










?> 