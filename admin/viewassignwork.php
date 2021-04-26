<?php 
    define('TITLE','Word Order');
    define('PAGE','work');
 include('includes/header.php'); 
include('../dbConnection.php');
  session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
}else{
    header("location:login.php");
}
?>
    <div class="col-sm-8">
    <?php
    if(isset($_REQUEST['view'])){
        $sql="SELECT * FROM `assignwork_tb` WHERE request_id = {$_REQUEST['id']} ";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();  ?>
        <table class="table table-bordered">
            <thead>
            <tr>
            <h5 class="text-center text-dark mt-5">Assign Work Details</h5>
            </tr>
            <tr>
                <th>Request ID : </th>
                <td><?php echo $row['request_id'] ; ?></td>
            </tr>
            <tr>
                <th>Request Info : </th>
                <td><?php echo $row['request_info'] ; ?></td>
            </tr>
            <tr>
                <th>Request Desc : </th>
                <td><?php echo $row['request_desc'] ; ?></td>
            </tr>
            <tr>
                <th>Requester Name : </th>
                <td><?php echo $row['requester_name'] ; ?></td>
            </tr>
            <tr>
                <th>Requester Address1 : </th>
                <td><?php echo $row['requester_add1'] ; ?></td>
            </tr>
            <tr>
                <th>Requester Address2: </th>
                <td><?php echo $row['requester_add2'] ; ?></td>
            </tr>
            <tr>
                <th>Requester city : </th>
                <td><?php echo $row['requester_city'] ; ?></td>
            </tr>

            <tr>
                <th>Requester state : </th>
                <td><?php echo $row['requester_state'] ; ?></td>
            </tr>
            <tr>
                <th>Requeste Zip : </th>
                <td><?php echo $row['requester_zip'] ; ?></td>
            </tr>
            <tr>
                <th>Requester Email : </th>
                <td><?php echo $row['requester_email'] ; ?></td>
            </tr>
            <tr>
                <th>Requester Mobile : </th>
                <td><?php echo $row['requester_mobile'] ; ?></td>
            </tr>
            <tr>
                <th>Assign Technician : </th>
                <td><?php echo $row['assign_tech'] ; ?></td>
            </tr>
            <tr>
                <th>Assign Date: </th>
                <td><?php echo $row['assign_date'] ; ?></td>
            </tr>
            <tr>
                <th>Customer Signature: </th>
                <td></td>
            </tr>
            <tr>
                <th>Technician Signature: </th>
                <td></td>
            </tr>
            </thead>
        </table>
        <div class="text-center">
            <form method="post" class="d-print-none">
            <input type="submit" value="Print" class="btn btn-success mb-5 mr-3"
                onclick="window.print()">
            <a href="work.php" class="btn btn-secondary mb-5">Close</a>
            </form>
        </div>
<?php
    }
?>
</div>
<?php include("includes/footer.php");  ?>
    