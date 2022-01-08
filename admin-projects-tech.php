<?php
 include 'database.php';?>

<body id="page-top">

    <!-- Page Wrapper -->
   <div class="container">
                        
                        <!-- Page Heading -->
                        <?php

                        $project_list= "SELECT * FROM projects where projectType= 'Business'";
                        $result = $conn->query($project_list);

                        ?>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-white">Business Projects </h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php  if ($result->num_rows > 0) {

        echo "<table class='table table-bordered' id='dataTable2' width='100%' cellspacing='0'>
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Program</th>
                <th>Sponsor</th>
                <th>Description</th>
                
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
            
            <td> <a href='#' data-toggle='modal' data-target='#viewProjectModel_".$row["id"]."'>
            <i class='fas fa-eye'></i></a> </td>


            </tr>"?>
                                    <div class="modal fade" id="viewProjectModel_<?php echo $row['id'] ?>"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header modal-form-header">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">
                                                    Project Details</h5>
                                                    <button class="close text-white" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <strong>Title</strong>
                                                                    <label> <?php echo $row["title"]; ?></label>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Program</strong>
                                                                <p><?php echo $row["program"]; ?></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>Names</strong>
                                                                <p><?php echo $row["names"]; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Sponsor</strong>
                                                                <p><?php echo $row["sponsor"]; ?></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>URL</strong>
                                                                <p><?php echo $row["pr_url"]; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <strong>Project Type</strong>
                                                               <p> <span class="badge badge-info"><?php echo $row["projectType"]; ?></span></p>
                                                                
                                                            </div>
                                                            <div class="col-md-6">
                                                                <strong>Mentor</strong>
                                                                <p><?php echo $row["mentor"]; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <strong>Description</strong>
                                                            <p><?php echo $row["pr_description"]; ?></p>
                                                           
                                                        </div>
                                                    </div>
                                                        
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary" type="button"
                                                            data-dismiss="modal">Close</button>

                                                    </div>
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

                   