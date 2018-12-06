<?php
 $mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='wta';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db))
{
    die("error message");
}

$gmail=$_REQUEST['gmail'];
$password=$_REQUEST['password'];

$query=mysql_query("SELECT * FROM `sregistration` WHERE `gmail`='$gmail' AND `password`='$password' ");
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
  <link rel="stylesheet" href="src/css/bootstrap.min.css">
  <script src="src/javascript/jquery.min.js"></script>
  <script src="src/javascript/popper.min.js"></script>
  <script src="src/javascript/bootstrap.min.js"></script>
  
 
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

function checkCookie() {
  var user = getCookie("ProjectCookie");
  //alert("cookie value ====>"+user);
  if (user != "") {
     // alert("Welcome again " + user);
      document.getElementById('logout').style.display = "block";
      document.getElementById('userloginId').innerHTML=user;
  } else {
      alert("you have already loged out, please login again");
      document.getElementById('logout').style.display = "none";
      window.location.href = 'index.html';
      
  }
}
function deleteCookie(name) {
    alert("in function setCookie");       
        document.cookie = "ProjectCookie=;" + ";path=/";
};
</script>

</head>
<style>.bg-dark {
  background-color: #014656!important;
}
.btn-primary {
    color: #fff;
    background-color: #009EA9;
    border-color: #009EA9;
}
.navbar-dark .navbar-nav .nav-link {
    color: rgb(0, 158, 169);
}

.h3, h3 {
  font-size: 1.75rem;
  color: #014656;
}
navbarfloat{
  float:right;
}

</style>
<body onload="checkCookie()" style="height:1500px" >
<div id="logout" style="display:none;">
<div class="container-fluid">
  <br>
  <center><h3>Campus Management System</h3></center>
  
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="#">CMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
   <li class="nav-item"  >
      <a class="nav-link"    href="studentprofile.php">Profile</a>
    </li>
    <div id="navbarfloat">
    <li class="nav-item"> 
      <a class="nav-link" href = "logout.php" value="logout" type="submit" onclick="deleteCookie('ProjectCookie');" >Logout</a>
    </li>
    </div>
  </ul>
  </div>
</nav>


<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-7 align-self-center">
        <center>  <h3>Update Your Profile</h3>
        <p class="my-3">The School Profile is a piece of collateral put together by your school (usually a brochure or flyer) that includes information about the student body and the types of classes offered by your school, such as AP, IB, etc.<br><br><a href="studentform.html" class="btn btn-primary">Go somewhere</a></p>
    </div>
      <div class="col-md-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="studentimages/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="studentimages/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="studentimages/3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
  </div>
</div>



<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5 order-2 order-md-1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="studentimages/4.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="studentimages/5.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="studentimages/6.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> </div>
      <div class="col-md-7 order-1 order-md-2">
        <center>  <br><br><br><br><h3>Appraisal from a company</h3>
          <p class="my-3">an organized group of people with a particular purpose, such as a business or government department.<br><br><a href="interviewstudent.php" class="btn btn-primary">Go somewhere</a></p>
</center>
        </div>
    </div>
  </div>
</div>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-7 align-self-center">
        <center>  <h3>Job Post</h3>
          <p class="my-3">Recruitment (hiring) refers to the overall process of attracting, shortlisting, selecting and ... public-sector employment agencies, commercial recruitment agencies, or specialist search consultancies are used to undertake parts of the process..<br><br><a href="jobpublic.php" class="btn btn-primary">Go somewhere</a></p>
</center>
    </div>
      <div class="col-md-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="studentimages/7.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="studentimages/8.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="studentimages/9.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
  </div>
</div>



<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
        <p>Today’s students not only represent a shift in demographics</p>
        <p> but a shift in attitudes about education. They seek greater flexibility in fulfilling their goals and expect institutions to provide education on demand, as a service. CampusNexus® Student enables you to proactively engage students in a manner designed for their success and yours.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
          </li>
          <li>
            <p>
              <i class="fa fa-envelope mr-3"></i> info@example.com</p>
          </li>
          <li>
            <p>
              <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
          </li>
          <li>
            <p>
              <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb">
          <i class="fa fa-facebook"></i>
        </a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw">
          <i class="fa fa-twitter"></i>
        </a>
        <!-- Google +-->
        <a type="button" class="btn-floating btn-gplus">
          <i class="fa fa-google-plus"></i>
        </a>
        <!-- Dribbble -->
        <a type="button" class="btn-floating btn-dribbble">
          <i class="fa fa-dribbble"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> Campus Management System.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script src="src/javascript/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="src/javascript/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="src/javascript/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</pingendo>
<!--<a href = "logout.php"><input type="submit" value="logout" onclick="deleteCookie('ProjectCookie');"></a>-->
</div>
</body>
</html>


