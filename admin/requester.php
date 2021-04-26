<?php
define('TITLE', 'Requester');
define('PAGE', 'requesters');
include('includes/header.php'); 
include('../dbConnection.php');
 session_start();
   if(isset($_SESSION['is_adminlogin'])){
       $aEmail = $_SESSION['aEmail'];
   }else{
       header("location:login.php");
   }
?>  
<div class="col-sm-9 mt-5 text-center"><!--start 2nd column-->
    <p class="bg-dark text-white p-2">List of User</p>
    <?php 
        $sql="SELECT * FROM requesterlogin_tb";
        $result=$conn->query($sql);
        if($result->num_rows > 0){?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Requester ID</th>
                        <th>Requester Name</th>
                        <th>Requester Email</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                    <?php 
                    while($row=$result->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $row['r_login_id'] ?></td>
                            <td><?php echo $row['r_name'] ?></td>
                            <td><?php echo $row['r_email'] ?></td>
                            <td>
                                <form action="editreq.php" method="post" class="d-inline">
                                   <input type="hidden" name="id" value="<?php echo $row['r_login_id']; ?>"> 
                                   <button type="submit" name="r_edit" class="btn btn-info"><i class="fas fa-pen"></i></button>
                                </form>
                                <form action="" method="post" class="d-inline">
                                   <input type="hidden" name="id" value="<?php echo $row['r_login_id']; ?>"> 
                                   <button type="submit" name="r_delete" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>

                    <?php } ?>
                    </tbody>
                </thead>
            </table>
     <?php
        }else{
            echo "0 result";
        }
    ?>
    </div><!--start 2nd column-->

    <?php 
    if(isset($_REQUEST['r_delete'])){
    $sql="DELETE FROM requesterlogin_tb WHERE r_login_id ={$_REQUEST['id']}";
    if($conn->query($sql) == TRUE){
        echo '<meta http-equiv ="refresh" content="0;URL=?deleted" />';
    }
}
    ?>
    </div><!-- End row -->
        <div class="float-right mr-5">
            <a href="insertreq.php" class="btn btn-danger">
                <i class="fas fa-plus fa-2x"></i>
            </a>
        </div>
</div><!-- end container -->


    <!--javascript-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>