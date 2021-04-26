<?php
define('TITLE', 'Change Password');
define('PAGE', 'requesterchangepass');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequestLogin.php'</script>";
}
$rEmail = $_SESSION['rEmail'];
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['rpassword']==""){
        $msg='<div class="alert-warning mt-2 p-2" role="alert">Please Enter Password</div>';
    }else{
        $rPass=$_REQUEST['rpassword'];
        $sql="UPDATE requesterlogin_tb SET r_password ='$rPass' WHERE r_email='$rEmail'";
        if($conn->query($sql)==TRUE){
            $msg='<div class="alert-success mt-2 p-2" role="alert">Update successfully</div>';
        }
    }
}




?>





<div class="col-sm-9 col-md-10"><!-- start changepassword Area 2nd column-->
<form class="mt-5 mx-5" action="" method="POST">
<div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail"   value="<?php echo $rEmail ; ?>"  readonly>
        </div>
<div class="form-group">
     <label for="inputnewPassword">New Password</label>
            <input type="password" class="form-control" name="rpassword" id="inputnewPassword"
            placeholder="New Password" value="">
        </div>
        <button type="submit" name="passupdate" class="btn btn-danger mr-4 mt-4">Update</button>
        <button type="reset" name="passreset" class="btn btn-dark mt-4">reset</button>
 <?php if(isset($msg)) { echo $msg ; }  ?>


</form>
</div><!-- end changepassword Area 2nd column-->

<?php
include('includes/footer.php');
?>
