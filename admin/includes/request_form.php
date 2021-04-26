<?php
if(session_id()==""){
    session_start();
}
    if(isset($_SESSION['is_adminlogin'])){
        $aEmail = $_SESSION['aEmail'];
    }else{
        header("location:../login.php");
    }

    //retrieve all data to click view button
    if(isset($_REQUEST['requestview'])){
    $sql="SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
}
    if(isset($_REQUEST['requestclose'])){
    $sql="DELETE FROM submitrequest_tb WHERE request_id={$_REQUEST['id']}";
    if($conn->query($sql)==TRUE){
        echo '<meta http-equiv="refresh" content="0; url=?closed"/>';
    }else{
       echo "unable to delete"; 
    }
}

    //click assign button
    if(isset($_REQUEST['assign'])){
        if(($_REQUEST['request_id']=="") || ($_REQUEST['requestinfo']=="") || ($_REQUEST['requesterdesc']=="") || ($_REQUEST['requestername']=="") ||
       ($_REQUEST['requesteradd1']=="") || ($_REQUEST['requesteradd2']=="") || ($_REQUEST['requestercity']=="") ||
       ($_REQUEST['requesterstate']=="") || ($_REQUEST['requesterzip']=="") || ($_REQUEST['requesteremail']=="") ||
       ($_REQUEST['requestermobile']=="") || ($_REQUEST['techsign']=="") || ($_REQUEST['assigndate']=="")){
        $msg='<div class="alert-warning mt-2 p-2" role="alert">All Fileds are Require</div>';
       }else{
        $rid= $_REQUEST['request_id'];
        $rinfo = $_REQUEST['requestinfo'];
        $rdesc = $_REQUEST['requesterdesc'];
        $rname = $_REQUEST['requestername'];
        $radd1 = $_REQUEST['requesteradd1'];
        $radd2 = $_REQUEST['requesteradd2'];
        $rcity = $_REQUEST['requestercity'];
        $rstate = $_REQUEST['requesterstate'];
        $rzip = $_REQUEST['requesterzip'];
        $remail= $_REQUEST['requesteremail'];
        $rmobile = $_REQUEST['requestermobile'];
        $assign_tech = $_REQUEST['techsign'];
        $assigndate = $_REQUEST['assigndate'];
		
        $sql="INSERT INTO `assignwork_tb`(`request_id` ,`request_info`, `request_desc`, `requester_name`, 
        `requester_add1`, `requester_add2`, `requester_city`,`requester_state`,`requester_zip`, 
        `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) 
        VALUES ('$rid', '$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity',
        '$rstate', '$rzip', '$remail', '$rmobile', '$assign_tech', '$assigndate')";
        if($conn->query($sql)==TRUE){
            $msg='<div class="alert-success mt-2 p-2" role="alert">Assign Successfully</div>';
        }
       }
    }
?>

<div class="col-sm-5 ml-5 mt-5 jumbotron"><!-- start services request from 3rd column -->
<h5 class="text-center mb-4 ">Assign work Order Request</h5>
    <form action="" class="" method="post">
    <?php if(isset($msg)) { echo $msg ; }  ?>
        <div class="from-group">
            <label for="inputRequestId">Request ID</label>
            <input type="text" class="form-control" id="inputRequestId" name="request_id" 
            value="<?php if(isset($row['request_id'])){echo $row['request_id']; } ?>" readonly>
        </div>
        <div class="from-group">
            <label for="inputRequestInfo">Request Info</label>
            <input type="text" class="form-control" id="inputRequestInfo" name="requestinfo"
            value="<?php if(isset($row['request_info'])){echo $row['request_info']; } ?>">
        </div>
        <div class="from-group mt-2">
            <label for="inputRequestdesc">Description</label>
            <input type="text" class="form-control" id="inputRequestdesc" name="requesterdesc" 
            value="<?php if(isset($row['request_desc'])){echo $row['request_desc']; } ?>">
        </div>
        <div class="from-group mt-2">
            <label for="inputRequestName">Name</label>
            <input type="text" class="form-control" id="inputRequestName" name="requestername" 
            value="<?php if(isset($row['requester_name'])){echo $row['requester_name']; } ?>">
        </div>

        <div class="row mt-2">
            <div class="form-group col-md-6">
                <label for="inputAddressLine1">Address Line 1</label>
                <input type="text" class="form-control" id="inputAddressLine1" name="requesteradd1" 
                value="<?php if(isset($row['requester_add1'])){echo $row['requester_add1']; } ?>">
            </div>
            <div class="form-group col-md-6">
            <label for="inputAddressLine2">Address Line 2</label>
                <input type="text" class="form-control" id="inputAddressLine2" name="requesteradd2" 
                value="<?php if(isset($row['requester_add2'])){echo $row['requester_add2']; } ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5">
                <label for="RequesterCity">City</label>
                <input type="text" class="form-control" id="RequesterCity" name="requestercity" 
                value="<?php if(isset($row['requester_city'])){echo $row['requester_city']; } ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="RequesterState">State</label>
                <input type="text" class="form-control" id="RequesterState" name="requesterstate"  
                value="<?php if(isset($row['requester_state'])){echo $row['requester_state']; } ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="RequesterZip">Zip</label>
                <input type="text" class="form-control" id="RequesterZip" name="requesterzip" 
                onkeypress="isInputNumber(event)" value="<?php if(isset($row['requester_zip'])){echo $row['requester_zip']; } ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="RequesterEmail">Email</label>
                <input type="email" class="form-control" id="RequesterEmail" name="requesteremail" 
                value="<?php if(isset($row['requester_email'])){echo $row['requester_email']; } ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="RequesterMobile">Mobile</label>
                <input type="text" class="form-control" id="RequesterMobile" name="requestermobile"  
                onkeypress="isInputNumber(event)" 
                value="<?php if(isset($row['requester_mobile'])){echo $row['requester_mobile']; } ?>">
            </div>

			
	  <div class="form-group col-md-6">
        <label>Image of Broken part</label>
        <?php if(isset($row['pic'])){echo "<img src=".$row['pic']." width='600' height='500' alt='there is no image inserted'>"; } ?>
      </div>

        </div>





        <div class="row">
            <div class="form-group col-md-6">
                <label for="Technician">Technician</label>
                <input type="text" class="form-control" name="techsign" id="Technician">
            </div>
            <div class="form-group col-md-6">
                <label for="Assigndate">Date</label>
                <input type="date" class="form-control" name="assigndate" id="Assigndate">
            </div>
        </div>
        <div class="float-right mt-4">
        <input type="submit" name="assign" class="btn btn-success mr-3" value="Agree">
        <input type="reset" value="reset" name="resetrequest" class="btn btn-dark">
        </div>
       
    </form> 
 </div><!--end services request from 2nd column  -->



<!-- only number for Input fileds -->
<script>
        function isInputNumber(evt){
            var ch=String.fromCharCode(evt.which);
            if(!(/[0-9]/.test(ch))){
                evt.preventDefault();
            }
        }
    </script>


