<?php
define('TITLE', 'Work Order');
define('PAGE', 'work');
include('includes/header.php'); 
include('../dbConnection.php');
 session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
}else{
    header("location:login.php");
}
?>

<div class="col-sm-9 m-5"><!-- start 2nd column -->
    <?php
        $sql="SELECT * FROM `assignwork_tb`";
        $result=$conn->query($sql);
        if($result->num_rows > 0){?>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Request ID</th>
                    <th>Request Info</th>
                    <th>Request Name</th>
                    <th>City</th>
                    <th>Mobile</th>
                    <th>Technician</th>
                    <th>Assign Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php  
                while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['request_id']  ?></td>
                    <td><?php echo $row['request_info']  ?></td>
                    <td><?php echo $row['requester_name']  ?></td>
                    <td><?php echo $row['requester_city']  ?></td>
                    <td><?php echo $row['requester_mobile']  ?></td>
                    <td><?php echo $row['assign_tech']  ?></td>
                    <td><?php echo $row['assign_date']  ?></td>
                    <td>
                    <form action="viewassignwork.php" method="post" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $row['request_id'] ; ?>">
                        <button type ="submit" name="view" class="btn btn-warning"><i class="fas fa-eye"></i></button>
                    </form>
                    <form action="" method="post" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $row['request_id'] ; ?>">
                        <button type ="submit" name="delete" class="btn btn-secondary"><i class="far fa-trash-alt"></i></button>
                    </form>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    <?php
        }else{
            echo '0 result';
        }
    ?>
</div><!-- End 2nd column -->

    <?php 
    if(isset($_REQUEST['delete'])){
    $sql="DELETE FROM `assignwork_tb` WHERE request_id = {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
        echo ' <meta http-equiv="refresh" content="0; url=?deleted"/>';
    }
}
    ?>
<?php include("includes/footer.php");  ?>