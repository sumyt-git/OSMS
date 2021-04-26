<?php
define('TITLE', 'Requests');
define('PAGE', 'request');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>
<!-- start 2nd column -->
<div class="col-sm-4 ml-3 mt-5">
        <?php   
        //retrieve query
        $sql="SELECT request_id, request_info, request_desc, request_date FROM submitrequest_tb";
        $result=$conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){?>
                <div class="card mb-5">
                    <div class="card-header"><?php echo "Request Id : ".$row['request_id']; ?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Request Info : ".$row['request_info']; ?></h5>
                        <p class="card-text"><?php echo "Request Desc : ".$row['request_desc']; ?></p>
                        <p class="card-text"><?php echo "Request Date : ".$row['request_date']; ?></p>
                        <div class="text-right">
                            <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['request_id'] ; ?>">
                            <button type="submit" class="btn btn-danger text-white mr-2" name="requestview">View</button>
                            <button type="submit" class="btn btn-secondary text-white" name="requestclose">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php   
            }
        }
        ?>
</div>
<?php include("includes/request_form.php") ; ?>

<?php include("includes/footer.php");  ?>
    