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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Projects</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <?php 

$totalPro = "SELECT * from projects";
  
    if ($result = mysqli_query($conn, $totalPro)) {
    // Return the number of rows in result set
    $projectcount = mysqli_num_rows( $result );
    
}
?>

                        <div class="row">

                            <div class="col-lg-12 ba">
                                <div class="p-5">
                                    <div class="text-left">
                                        <h1 class="h4 text-gray-900 mb-4">Add project</h1>
                                    </div>
                                    <form class="add-project" action="insert_projects.php" method="post">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <!-- <label for="text">Title</label> -->
                                                <input type="text" class="form-control form-control-add" id="pr_title"
                                                    name="title" placeholder="Project Title" required>
                                            </div>
                                            <div class="col-sm-6 add-item">
                                                <!-- <label for="text">Program</label> -->
                                                <input type="text" class="form-control form-control-add" id="pr_program"
                                                    name="program" placeholder="Program" required>
                                            </div>


                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-6 add-item">
                                                <!-- <label for="text">Names</label> -->
                                                <input type="text" class="form-control form-control-add" name="names"
                                                    id="pr_names" placeholder="Names" required>
                                            </div>
                                            <div class="col-sm-6 add-item">
                                                <!-- <label for="text">Sponsor</label> -->
                                                <input type="text" class="form-control form-control-add" id="pr_sponsor"
                                                    name="sponsor" placeholder="Sponsor" required>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <!-- <label for="text">URL</label> -->
                                                <input type="text" class="form-control form-control-add" name="pr_url"
                                                    id="pr_url" placeholder="URL">
                                            </div>
                                            <div class="col-sm-6 add-item">
                                                <label for="text">Project Type</label>
                                                <br> 
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="projectType" id="inlineRadio1" checked value="Technology">
                                                    <label class="form-check-label" for="inlineRadio1">Technology</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="projectType" id="inlineRadio2" value="Business">
                                                    <label class="form-check-label" for="inlineRadio2">Business</label>
                                                </div>
                                                    
                                               
                                           </div>



                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-6 add-item">
                                                <!-- <label for="text">Mentor</label> -->
                                                <input type="text" class="form-control form-control-add" name="mentor"
                                                    id="pr_mentor" placeholder="Mentor" required>
                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Description</label>
                                            <textarea class="form-control form-control-add" name="pr_description"
                                                id="pr_description" rows="3"></textarea>
                                        </div>
                                        <input class="btn btn-primary" type="submit" name="save" value="Add">
                                        <!-- <a href="insert_projects.php" class="btn btn-primary btn-add">
                                            Add
                                        </a> -->
                                        <hr>


                                    </form>



                                </div>
                            </div>
                        </div>


                        <div class="container-fluid">
                        
                            <!-- Page Heading -->
                            <?php

  $project_list= "SELECT * FROM projects";
  $result = $conn->query($project_list);
  ?>
                            <h1 class="h3 mb-2 text-gray-800">Projects List</h1>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects </h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <?php  if ($result->num_rows > 0) {

            echo "<table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Program</th>
                    <th>Sponsor</th>
                    <th>Description</th>
                    <th>Project Type</th>
                    <th>Actions</th>                       
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Program</th>
                    <th>Sponsor</th>
                    <th>Description</th>
                    <th>Project Type</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
                <tbody>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["title"]."</td>
                <td>".$row["program"]."</td>
                <td>".$row["sponsor"]."</td>
               <td>" .substr($row["pr_description"],0,25)."..</td>
                <td>".$row["projectType"]."</td>
                <td> <a href='#' data-toggle='modal' data-target='#viewProjectModel_".$row["id"]."'>
                <i class='fas fa-eye'></i></a> </td>

   
                </tr>"?>
                                        <div class="modal fade" id="viewProjectModel_<?php echo $row['id'] ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            <?php echo $row["title"]; ?></h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5><?php echo $row["names"]; ?></h5>
                                                        <p><?php echo $row["pr_description"]; ?></p>
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