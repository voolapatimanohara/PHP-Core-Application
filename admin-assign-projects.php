<?php include 'admin-header.php';
 include 'database.php';


if(isset($_POST['save_judges']))
{
    
    $prodId = $_POST['prodId'];
    $jedgeIdlist = $_POST['jedgeId'];
    $roundNumber = $_POST['roundNumber'];
    
    foreach ($jedgeIdlist as $value) {
        $int = $value;
        $query = "INSERT INTO projects_vs_jedges (projectId,jedgeId,roundNumber) VALUES ('$prodId', '$int', '$roundNumber')";
        $query_run = mysqli_query($conn, $query);
    }
    
    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        echo "alert(Succesfully)";
        header("Location: admin-assign-projects.php");
    }
    else
    {
       // echo "alert(NoSuccesfully)";
        $_SESSION['status'] = "Not Inserted";
        header("Location: admin-assign-projects.php");
    }
}





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
                                    <h6 class="m-0 font-weight-bold text-white">Projects List </h6>
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
                <td> <a href='#' data-toggle='modal' data-target='#assignProjectModel_".$row["id"]."'>
                <i class='fas fa-share-square'></i></a> </td>

   
                </tr>"?>
                                        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="assignProjectModel_<?php echo $row['id'] ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content modal-form">
                                                    <div class="modal-header modal-form-header">
                                                        <h5 class="modal-title text-white" id="exampleModalLabel">
                                                        Assign Judges</h5>
                                                        <button class="close text-white" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                </div>
                                                    <div class="modal-body">
                                                   
                                                  <?php 
                                                        $totalJudges = "SELECT userType from login where userType  GROUP BY userType ";
                                                        ?>
                                                    <form  name="assign-projects-form"  enctype="multipart/form-data" action="admin-assign-projects.php" method="POST"  id="assignProjects">
                                                        
                                                    
                                                    <div class="form-group row">

                                                        <div class="col-sm-6 add-item">
                                                            <label for="text">Project Names</label>
                                                            <input type="text" class="form-control form-control-add" 
                                                            name="" value="<?php echo $row["title"]; ?>"readonly>
                                                        </div>
                                                        <div class="col-sm-6 add-item">
                                                            <label for="text">Program</label>
                                                            <input type="text" class="form-control form-control-add" 
                                                            name="" value="<?php echo $row["program"]; ?>"readonly>
                                                        </div>
                                                        <div class="col-sm-6 add-item">
                                                            <label for="text">Names</label>
                                                            <input type="text" class="form-control form-control-add" 
                                                            name="" value="<?php echo $row["names"]; ?>"readonly>
                                                        </div>
                                                        <div class="col-sm-6 add-item">
                                                            <label for="text">Mentor</label>
                                                            <input type="text" class="form-control form-control-add" 
                                                            name="" value="<?php echo $row["mentor"]; ?>"readonly>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">

                                                        <div class="col-sm-6 add-item">
                                                            <label for="text">URL</label>
                                                            <input type="text" class="form-control form-control-add" 
                                                            name="" value="<?php echo $row["pr_url"]; ?>"readonly>
                                                        </div>
                                                        <div class="col-sm-6 add-item">
                                                            <label for="text">Project Type</label>
                                                            <input type="text" class="form-control form-control-add" 
                                                            name="" value="<?php echo $row["projectType"]; ?>"readonly>
                                                        </div>
                                                        

                                                    </div>
                                                    
                                                        <div class="form-group row">
                                                        <div class="col-sm-6 add-item">
                                                        <label for="text">Sponsor</label>
                                                            <input type="text" class="form-control form-control-add" 
                                                            name="" value="<?php echo $row["sponsor"]; ?>"readonly>
                                                        </div>
                                                        <div class="col-sm-6 add-item">
                                                            
                                                            <input type="text" class="form-control form-control-add" id="prodId"
                                                            name="prodId" value="<?php echo $row["id"]; ?>" hidden>
                                                        </div>
                                                        <div class="col-sm-6 add-item">
                                                            <input type="text" class="form-control form-control-add" id="roundNumber"
                                                            name="roundNumber" value= "1"  hidden>
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="exampleFormControlSelect2">Assign Judges</label>

                                                        <select size="8"   multiple="multiple" class="form-control someSelect" name="jedgeId[]" id="jedgeId">
                                                        
                                                            <?php
                                                                // Using database connection file here
                                                                $judgelist = mysqli_query($conn, "SELECT id, firstName, lastName From login");  // Use select query here 

                                                                while($data = mysqli_fetch_array($judgelist))
                                                                {
                                                                    echo "<option value='". $data['id'] ."'>" .$data['firstName'].$data['lastName'] ."</option>";  // displaying data in option menu
                                                                }	
                                                            ?>  
                                                    </select>                                           
                                                        </div>
                                                       
                                                        <input class="btn btn-primary" type="submit" name="save_judges" value="Add">
                                       
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