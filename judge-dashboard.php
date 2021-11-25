<?php include 'admin-header.php';?>
<?php include 'database.php';
 $loginId = $_SESSION['id'];

$totalPro = "SELECT * from projects_vs_jedges where jedgeId = $loginId  ORDER BY modifiedOn DESC";
  
    if ($result1 = mysqli_query($conn, $totalPro)) {
    // Return the number of rows in result set
    $jdprojectcount = mysqli_num_rows( $result1 );
    
}

$totalRound1Pro= "SELECT * from projects inner JOIN projects_vs_jedges on projects.id=projects_vs_jedges.projectId where projects_vs_jedges.jedgeId= $loginId and projects_vs_jedges.roundNumber=1 ORDER BY modifiedOn DESC";
    
     if ($result2 = mysqli_query($conn, $totalRound1Pro)) {
    // Return the number of rows in result set
    $totalRound1count = mysqli_num_rows( $result2);
}
$totalsemifinalPro= "SELECT * from projects inner JOIN projects_vs_jedges on projects.id=projects_vs_jedges.projectId where projects_vs_jedges.jedgeId= $loginId and projects_vs_jedges.roundNumber=2 ORDER BY modifiedOn DESC";
    
     if ($result3 = mysqli_query($conn, $totalsemifinalPro)) {
    // Return the number of rows in result set
    $totalsemifinalcount = mysqli_num_rows( $result3);
}

$totalfinalPro= "SELECT * from projects inner JOIN projects_vs_jedges on projects.id=projects_vs_jedges.projectId where projects_vs_jedges.jedgeId= $loginId and projects_vs_jedges.roundNumber=3 ORDER BY modifiedOn DESC";
    
     if ($result4 = mysqli_query($conn, $totalfinalPro)) {
    // Return the number of rows in result set
    $totalfinalcount = mysqli_num_rows( $result4);
}

?>
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Projects  -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Projects</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jdprojectcount?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-project-diagram fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>                 
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                               
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-white">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Round-I <span
                                            class="float-right"><?php echo $totalRound1count; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $totalRound1count; ?>%"
                                            aria-valuenow="<?php echo $totalRound1count; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    <h4 class="small font-weight-bold">Semi Final <span
                                            class="float-right"><?php echo $totalsemifinalcount; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $totalsemifinalcount; ?>%"
                                            aria-valuenow="<?php echo $totalsemifinalcount; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    <h4 class="small font-weight-bold">Final <span
                                            class="float-right"><?php echo $totalfinalcount; ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $totalfinalcount; ?>%"
                                            aria-valuenow="<?php echo $totalfinalcount; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                </div>
                            </div>                         

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-white">About Us</h6>
                                </div>
                                <div class="card-body">
                                   
                                    <p>Welcome to Fleming School of business and technology. Fleming College known for its excellence in Business, Environmental and Science Studies <a
                                            target="_blank" rel="nofollow" href="https://flemingcollege.ca/">Fleming School</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://flemingcollege.ca/">Browse Fleming School on
                                        About &rarr;</a>
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