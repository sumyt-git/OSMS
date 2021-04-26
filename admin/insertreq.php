<?php 
    define('TITLE','Requester');
    define('PAGE','requesters');
   include('includes/header.php'); 
include('../dbConnection.php');
   session_start();
   if(isset($_SESSION['is_adminlogin'])){
       $aEmail = $_SESSION['aEmail'];
   }else{
       header("location:login.php");
   }
?>
<?php 
if(isset($_REQUEST['reqsubmit'])){
    //checking for empty fields
    if(($_REQUEST['r_name']=="") || ($_REQUEST['r_email']=="") || ($_REQUEST['r_password']=="")){
        $regmsg='<div class="alert-warning mt-2 p-2" role="alert"> All Fields are Require </div>';
    }else{
        //assigning Users values to variable
        $rname=$_REQUEST['r_name'];
        $remail=$_REQUEST['r_email'];
        $rpassword=$_REQUEST['r_password'];
        $sql="INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES('$rname', '$remail', '$rpassword')";
        if($conn->query($sql)==TRUE){
            $regmsg='<div class="alert-success mt-2 p-2" role="alert"> Added Successfully </div>';
        }else{
            $regmsg='<div class="alert-danger mt-2 p-2" role="alert"> Unable to Add </div>';
            }
        }
    }
?>
<!-- Start 2nd column -->
<div class="col-sm-6 mt-5 ml-3 jumbotron">
    <h4 class="text-center">Add New Requester</h4>
<form action="" class="shadow-sm p-4" method="post">
    <div class="form-group">
        <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
        <input type="text" class="form-control" name="r_name" placeholder="Name">
    </div>
    <div class="form-group">
        <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
        <input type="email" class="form-control" name="r_email" placeholder="Email">
    </div>
    <div class="form-group">
        <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">New Password</label>
        <input type="password" class="form-control" name="r_password" placeholder="Password">
    </div>
    <div class="text-center">
    <button type="submit" name="reqsubmit" class="btn btn-danger shadow-sm font-weight-bold mt-2 mr-3">Sing up</button>
    <a href="requester.php" class="btn btn-secondary shadow-sm font-weight-bold mt-2">Close</a>
    </div>
    <?php if(isset($regmsg)) {echo $regmsg; }?>
</form>
</div>
<?php include("includes/footer.php");  ?>