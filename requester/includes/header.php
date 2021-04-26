
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  

  <title><?php echo TITLE?></title>
  <!--bottstrap css-->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
  <!--font awesome css-->
  <link rel="stylesheet" href="../css/all.min.css">
  
  <!--custom css-->
  <link rel="stylesheet" href="../css/custom.css">

  
 </head>
 <body>
  <!--topbar bar-->
  <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">OSMS</a>
 </nav>

 <!--start container-->
 <div class="container-fluid mb-5"style="margin-top:40px;">
 <div class="row"><!--start row-->
 <!-- Side Bar -->
 <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'requestprofile') { echo 'active'; } ?>" href="requestprofile.php">
        <i class="fas fa-user"></i>
        Profile <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'submitrequest') { echo 'active'; } ?>" href="submitrequest.php">
        <i class="fab fa-accessible-icon"></i>
        Submit Request
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'Checkstatus') { echo 'active'; } ?>" href="Checkstatus.php">
        <i class="fas fa-align-center"></i>
        Service Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'requesterchangepass') { echo 'active'; } ?>" href="requesterchangepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav><!--End side bar-->
