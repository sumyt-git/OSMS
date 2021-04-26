<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equip="X-UA-Compatible" content="ie=edge">
  
  <!--bottstrap css-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <!--font awesome css-->
  <link rel="stylesheet" href="css/all.min.css">
  
<!--google font-->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">


  <!--custom css-->
  <link rel="stylesheet" href="css/custom.css">

  <title>OSMS</title>
 </head>
 <body>
  <!--start navigation-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
<a href="index.php" class="navbar-brand">OSMS</a>
<span class="navbar-text">Customer's Happiness is our Aim </span>

<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="myMenu">
<ul class="navbar-nav pl-5 custom-nav">
 <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
 <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li> 
 <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
 <li class="nav-item"><a href="requester/RequestLogin.php" class="nav-link">Login</a></li>
 <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
  
  </ul>
</div>
  
  </nav><!-- End Navigation-->
  
  <!--  start Header jumbotron-->
  <header class="jumbotron back-image" style="background-image:url(images/Banner1.jpg);">
<div class="myclass mainHeading">
<h1 class="text-uppercase text-danger font-weight-bold">Welcome To OSMS</h1>
<p class="font-italic"><i>Customer's Happiness is our Aim</i></p>
<a href="requester/RequestLogin.php" class="btn btn-success mr-4">Login</a>
<a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
</div>
</header><!--  End Header jumbotron-->

    <!--  start introduction section-->
<div class="container">
<div class="jumbotron">
<h3 class="text-center">OSMS Services</h3>
<p>
OSMS Services is one of the leading chain of multi-brand Electronics and Electrical service workshops offering wide array of services. We focus on enhancing your uses experience by offering world-class Electronic Appliances maintenance services. Our sole mission is "To provide Electronic Appliances care services to keep the devices fit and healthy and customers happy and smiling". With well-equipped Electronic Appliances service centres and fully trained mechanics, we provide quality services with excellent packages that are designed to offer you great savings. Our state-of-art workshops are conveniently located in many cities across the country. Now you can book your service online by doing Registration.
</p>
</div>
</div><!--  End introduction section-->

<!-- start serives section-->
<div class="container text-center border-bottom" id="Services">
<h2>Our services</h2>
<div class="row mt-4">
<div class="col-sm-4 mb-4">
<a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
<h4 class="mt-4">Electronic Appliances</h4>
</div>
<div class="col-sm-4 mb-4">
<a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
<h4 class="mt-4">Preventive Maintenace</h4>
</div>
<div class="col-sm-4 mb-4">
<a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
<h4 class="mt-4">Fault Repair</h4>
</div>
</div>
</div><!-- end serives section-->

<!-- start registration-->
 <?php include('userregistration.php')?>
 <!-- end registration-->
 
  <!-- start happy customer-->
  <div class="jumbotron bg-danger">
	<div class="container">
	<h2 class="text-center text-white">Happy Customer</h2>
	<div class="row mt-5">
	<div class="col-lg-3 col-sm-6"> <!--start 1st column-->
	<div class="card shadow-lg mb-2">
	<div class="card-body text-center">
	<img src="images/avtar1.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
	<h4 class="card-title">WhiteBeard</h4>
	<p class="card-text">child of sea</p>
	</div>
		</div>
	</div><!--end 1st column-->
  
  
	<div class="col-lg-3 col-sm-6"> <!--start 2nd column-->
	<div class="card shadow-lg mb-2">
	<div class="card-body text-center">
	<img src="images/avtar2.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
	<h4 class="card-title">Miyamoto Musashi</h4>
	<p class="card-text">Vagabond</p>
	</div>
		</div>
	</div><!--end 2nd column-->
  

	<div class="col-lg-3 col-sm-6"> <!--start 3rd column-->
	<div class="card shadow-lg mb-2">
	<div class="card-body text-center">
	<img src="images/avtar3.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
	<h4 class="card-title">Dabi</h4>
	<p class="card-text">Past never dies</p>
	</div>
		</div>
	</div><!--end 3rd column-->


	<div class="col-lg-3 col-sm-6"> <!--start 4th column-->
	<div class="card shadow-lg mb-2">
	<div class="card-body text-center">
	<img src="images/avtar4.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
	<h4 class="card-title">Eren</h4>
	<p class="card-text">Freedom</p>
	</div>
		</div>
	</div><!--end 4th column-->

</div>
  </div>
  </div><!-- end happy customer-->

<!-- start contact us-->
<div class="container" id="Contact">
<h2 class="text-center mb-4">Contact Us</h2>
 <div class="row">
 <!--start 1st column--> 
 <?php include('contactform.php')?>
 <!--end 1st column-->

 <div class="col-md-4 text-center"><!--start 2nd column-->
	<strong>Headquatar</strong><br>
	OSMS pvt Ltd,<br>
	Madhu Vihar, Dwarka<br>
	New Delhi-110059<br>
	phone:+0000000000<br>
	 <a href="#" target="_blank">www.OSMS.com</a> <br><br><br>
	
	<strong>Branch</strong><br>
	OSMS pvt Ltd,<br>
	Palam,Dwarka<br>
	New Delhi-110059<br>
	phone:+0000000000<br> 
	<a href="#" target="_blank">www.OSMS.com</a> <br>
	
 </div><!--end 2nd column-->

</div>
</div><!-- end contact us-->


<!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Sumit &copy; 2021.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->





  
  <!-- javascript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>



 </body>
</html>
