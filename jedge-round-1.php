<?php include 'admin-header.php';
 include 'database.php';
 $loginId = $_SESSION['id'];
 //echo   $loginId;
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
                        <h1 class="h3 mb-0 text-gray-800">Projects</h1>

                    </div> -->

                    <!-- Content Row -->
                    <div class="row">
                        <?php 

$totalPro = "SELECT * from projects_vs_jedges where jedgeId = $loginId  ORDER BY modifiedOn DESC";
  
    if ($result1 = mysqli_query($conn, $totalPro)) {
    // Return the number of rows in result set
    $jdprojectcount = mysqli_num_rows( $result1 );
    
}
?>

 


                        <div class="container-fluid">
                        
                            <!-- Page Heading -->
                            <?php

  $project_list= "SELECT * from projects inner JOIN projects_vs_jedges on projects.id=projects_vs_jedges.projectId where projects_vs_jedges.jedgeId= $loginId and projects_vs_jedges.roundNumber=1 ORDER BY modifiedOn DESC";
  $result = $conn->query($project_list);

 

  ?>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-white">Round -I Projects </h6>
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
                <td class='text-center'> <a href='#' data-toggle='modal' data-target='#judgeroundProjectModel_".$row["id"]."'>
                <i class='fa fa-external-link-alt'></i></a> </td>
             
   
                </tr>"?>
                                        <div class="modal fade" id="judgeroundProjectModel_<?php echo $row['id'] ?>"
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
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Answer">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Question-2</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Answer">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Add Marks</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            </select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Remarks</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                        <input class="btn btn-primary" type="submit" name="save" value="Add">
    
                                                    </form>                                                 
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button"
                                                            data-dismiss="modal">Close</button>

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