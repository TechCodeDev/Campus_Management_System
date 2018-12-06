<?php

$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('wta') or die(mysql_error());

$var=mysql_query("SELECT *FROM jobs");

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

<div class="container"><br>
 <center> <h2>Job Post </h2></center><br>
  <p></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Company-Name</th>
		<th>Gmail</th>
		<th>Registration Link</th>
		<th>Job Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
		  <?php
		 while($arr=mysql_fetch_row($var))
		 {
			 echo"<td>$arr[0]</td>";
			 echo"<td>$arr[1]</td>      ";
			 echo"<td>$arr[2]</td>";
			 echo"<td>$arr[3]</td>";
			 echo"<td>$arr[4]</td>";
			 echo"</tr>";
			
		 } 
		
		 ?>
        
      
      
    </tbody>
  </table>
</div>

</body>
</html>





