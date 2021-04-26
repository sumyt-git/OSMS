<?php 
    define('TITLE','Edit');
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
    <div class="col-sm-6 mt-5 ml-3 jumbotron"><!--statr 2nd column-->
        <h3 class="text-center">Update Requester Details</h3>
        <?php 
            if(isset($_REQUEST['r_edit'])){
            $sql="SELECT * FROM requesterlogin_tb WHERE r_login_id={$_REQUEST['id']}";
                $result=$conn->query($sql);
                $row=$result->fetch_assoc();
            }

            if(isset($_REQUEST['rupdate'])){
                if(($_REQUEST['rid'] == "") || ($_REQUEST['rName'] == "") ||
                ($_REQUEST['rEmail'] == "")){
                    $msg = '<div class="alert alert-warning mt-3 p-2">All fileds are Require</div>';
                }else{ 
                $rid = $_REQUEST['rid'];
                $rname = $_REQUEST['rName'];
                $remail = $_REQUEST['rEmail'];

                $sql="UPDATE requesterlogin_tb SET r_login_id ='$rid', r_name ='$rname', 
                r_email='$remail' WHERE r_login_id ='$rid'";
                if($conn->query($sql) == TRUE){
                    $msg = '<div class="alert alert-success mt-3 p-2">Update Successfully</div>';
                }
            }
        }
        ?>

        <form action="" method="post" class="mt-4">
            <div class="form-group">
                <label for="RequesterId">Requester ID</label>
                <input type="text" class="form-control" name="rid" id="RequesterId"
                 value="<?php  if(isset($row['r_login_id'])) {echo $row['r_login_id'];} ?>" readonly>
            </div>
            <div class="form-group">
                <label for="RequesterName">Requester Name</label>
                <input type="text" class="form-control" name="rName" id="RequesterName"
                 value="<?php  if(isset($row['r_name'])) {echo $row['r_name'];} ?>">
            </div>
            <div class="form-group">
                <label for="RequesterEmail">Requester Email</label>
                <input type="text" class="form-control" name="rEmail" id="RequesterEmail"
                 value="<?php  if(isset($row['r_email'])) {echo $row['r_email'];} ?>">
            </div>
            <div class="text-center">
                <input type="submit" value="Update" name="rupdate" class="btn btn-warning mr-2">
                <a href="requester.php" class="btn btn-secondary">Close</a>
            </div>
        </form>
        <?php if(isset($msg)) { echo $msg ;} ?>
    </div><!--statr 2nd column-->
<?php include("includes/footer.php");  ?>