<?php include 'admin-header.php';?>
<?php include 'database.php';
//$totalJudgescount = "SELECT userType from login where userType GROUP BY userType ";
  
//if ($jdresult = mysqli_query($conn, $totalJudgescount)) {
// Return the number of rows in result set
//$judgescount = mysqli_num_rows( $jdresult );

//}


?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'admin-slide-bar.php';?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <?php include 'admin-nav-toolbar.php';?>
                   

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <!--  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Judges</h1>
                        
                    </div> -->

                    <!-- Content Row -->
                   <!-- <div class="row">

                       
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Jadges</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo $judgescount?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fas fa-gavel fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        

                    </div>     -->            
                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-12 mb-6">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add Judge</h6>
                                </div>
                                <div class="col-lg-6">
                                <div class="p-5">
                                   
                                    <form name="judges" class="add-project user" action="insert_jedges.php" method="post">
                                        <div class="form-group">
                                            First Name
                                            <input type="text" class="form-control" name="judge_first_name"
                                                id="judge_first_name" aria-describedby="Name"
                                                placeholder="Enter Judge First Name..." required>
                                        </div>
                                        <div class="form-group">
                                            Last Name
                                            <input type="text" class="form-control" name="judge_last_name"
                                                id="judge_last_name" placeholder="Enter Judge Last Name" required>
                                        </div>
                                        <input class="btn btn-primary" type="submit" name="save" value="Add">                                        
                                       
                                    </form>
                                   
                                </div>
                            </div>                         

                        </div>

                    
                    </div>

                </div>
<?php $judge_list= "SELECT * FROM login where userType='1' ORDER BY modifiedOn DESC ";
  $judgeresult = $conn->query($judge_list);
  ?>
                <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Judges</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <?php  if ($judgeresult->num_rows > 0) {

echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>

<thead>
    <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
                          
    </tr>
</thead>
<tfoot>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        
    </tr>
</tfoot>
    <tbody>";
    // output data of each row
    while($row = $judgeresult->fetch_assoc()) {
    echo "<tr>
    <td>".$row["id"]."</td>
    <td>".$row["firstName"]."</td>
    <td>".$row["lastName"]."</td>
    
    </tr>";?>
    
    

<?php }
echo "</tbody></table>";?>


<?php } ?>
            
        </div>
    </div>
</div>


                <div class="row"> <!-- Content Column -->
                        <div class="container-fluid">
                      
<!-- Page Heading -->




<!-- Page Heading -->
<?php

  $judge_list= "SELECT * FROM login where userType='1' ORDER BY modifiedOn DESC ";
  $result = $conn->query($judge_list);
  ?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Jadges Details</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <?php  if ($result->num_rows > 0) {

            echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
            
            <thead>
                <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Login Id</th>
                <th>Password</th>
                <th>Status</th>
                <th>Actions</th>                       
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Login Id</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
                <tbody>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["firstName"]."</td>
                <td>".$row["lastName"]."</td>
                <td>".$row["loginId"]."</td>
                <td>".$row["loginId"]."</td>
                <td>".$row["status"]."</td>
                <td> <a href='#' data-toggle='modal' data-target='#viewjudgeModel_".$row["id"]."'>
                <i class='fas fa-eye'></i></a> </td>

   
                </tr>";?>
                <div class="modal fade" id="viewjudgeModel_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $row["firstName"].$row["lastName"]; ?></h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5><?php echo $row["firstName"]; ?></h5>
                            <p><?php echo $row["lastName"]; ?></p></div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
                            
                        </div>
                    </div>
                </div>
            </div>
           
            <?php }
            echo "</tbody></table>";?>
            
            
    <?php } ?>
            
        </div>
    </div>
</div>

                </div>

</div>


</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include 'admin-footer.php';?>

</body>

</html>