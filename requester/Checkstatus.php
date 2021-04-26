<?php
define('TITLE', 'Status');
define('PAGE', 'Checkstatus');
include('includes/header.php');
include('../dbConnection.php');
?>
 <div class="col-sm-7 m-5">
        <form action="" method="post" class="form-inline d-print-none">
            <div class="form-group">
                <label for="checkStatus">Request ID</label>
                <input type="text" name="checkid" class="form-control m-2" id="checkStatus"
                onkeypress="isInputNumber(event)">
                <input type="submit" name="search" value="search" class="btn btn-success">
            </div>
        </form>
    <?php 
    if(isset($_REQUEST['search'])){
        if(($_REQUEST['checkid']) == ""){
            echo '<div class="alert alert-warning" role="alert">Please enter Request id</div>'; 
        }else{
        $sql="SELECT * FROM `assignwork_tb` WHERE request_id = {$_REQUEST['checkid']} ";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc(); 
        if(($row['request_id']) == ($_REQUEST['checkid'])){ ?>
        <table class="table table-bordered">
            <thead>
            <tr>
            <h4 class="text-center bg-dark text-white mt-5 p-2">Assign Word order</h4>
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
            <input type="submit" value="Print" class="btn btn-success"
                onclick="window.print()">
            <input type="submit" value="reset" class="btn btn-dark">
            </form>
        </div>
    <?php
    }else{
        $sql="SELECT request_id FROM submitrequest_tb WHERE request_id = {$_REQUEST['checkid']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if(($row['request_id']) == ($_REQUEST['checkid'])){
        echo '<div class="alert alert-warning mt-4" role="alert">Your Request is Still Panding!!</div>';
        }else{
            echo '<div class="alert alert-danger mt-4" role="alert">Invalid Request ID</div>'; 
        } 
    }
}
}
    ?>
</div>


<script>
    function isInputNumber(evt){
        var ch = String.fromCharCode(evt.which);
        if(!/[0-9]/.test(ch)){
            evt.preventDefault();
        }
    }
</script>




<?php	
include('includes/footer.php');
?>
