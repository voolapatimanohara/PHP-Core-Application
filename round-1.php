<?php include 'admin-header.php';
 include 'database.php';?>

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
                        <h1 class="h3 mb-0 text-gray-800">Projects</h1>

                    </div> -->

                    <!-- Content Row -->
                    <div class="row">
                        <?php 

$totalPro = "SELECT * from projects ORDER BY modifiedOn DESC";
  
    if ($result = mysqli_query($conn, $totalPro)) {
    // Return the number of rows in result set
    $projectcount = mysqli_num_rows( $result );
    
}
?>

 


                        <div class="container-fluid">
                        
                            <!-- Page Heading -->
                            <?php

  $project_list= "SELECT * FROM projects";
  $result = $conn->query($project_list);

  ?>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Round -I Projects </h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <?php  if ($result->num_rows > 0) {

            echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Project Type</th>
                    <th  class='text-center'>Actions</th>                       
                </tr>
            </thead>
            <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Project Type</th>
                        <th  class='text-center'>Actions</th> 
                    </tr>
            </tfoot>
                <tbody>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["title"]."</td>
                <td>".$row["projectType"]."</td>
                <td class='text-center'> <a href='#' data-toggle='modal' data-target='#roundProjectModel_".$row["id"]."'>
                <i class='fa fa-external-link-alt'></i></a> </td>
             
   
                </tr>"?>
                                        <div class="modal fade" id="roundProjectModel_<?php echo $row['id'] ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="assignModalLabel">
                                                            <?php echo $row["title"]; ?></h5>
                                                        
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Question-1</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" value ="Answer-01" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Question-2</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" value ="Answer-02" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Marks</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" value ="50" readonly>
                                                     
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Remarks</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"readonly>Remarkss</textarea>
                                                        </div>
                                                        
                                                    </form>                                                 
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <?php }
            echo "</tbody></table>"?>


                                        <?php } ?>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End of Main Content -->
                    <!-- Logout Modal-->

                    <?php include 'admin-footer.php';?>

</body>

</html>