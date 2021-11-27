<?php include 'admin-header.php';?>
<?php include 'database.php';
 $loginId = $_SESSION['id'];

if(!empty($_POST["save"])) {

    if(count($_POST)>0) {
        $user_list = "SELECT *from login WHERE id= $loginId";
        
        $row = mysqli_fetch_array($user_list);
        print_r($row);
        echo "praveen";
        exit;
        
       
        if($_POST["currentPassword"] == $row["pswd"] && $_POST["newPassword"] == $_POST["verifyPassword"] ) {
        mysqli_query($conn,"UPDATE login set pswd='" . $_POST["newPassword"] . "' WHERE id='" . $loginId . "'");
        $message = "Password Changed Sucessfully";
        } else{
            $message = "Password is not correct";
        }
    }

    
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
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <?php 
                            $user_list= "SELECT * FROM login where id=  $loginId";
                            $result = $conn->query($user_list);
                            
                        ?>

                        <!-- Total Projects  -->
                        <div class="col-xl-4 col-md-4 mb-4">
                        
                        <div class="card mb-3 border-top-primary">
                                <?php while($row = $result->fetch_assoc()) { 
                                   
                                    if($row["userType"] == 0  ){
                                        $userType= "Admin";
                                    }else{
                                        $userType= "Judge";
                                    }
                                    ?>

								
								<div class="card-body text-center">
									<img src="img/profile-picture.png" alt="Stacie Hall" class="img-fluid rounded-circle mb-2" width="128" height="128">
									<h5 class="card-title mb-0"><?php echo $row["firstName"].$row["lastName"]; ?></h5>
									<div class="text-muted mb-2"><span class="badge bg-primary me-1 my-1"><?php echo $userType; ?></span></div>

									
								</div>
                                
								<hr class="my-0">
								
								<hr class="my-0">
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<span>Login ID: <?php echo $row["loginId"]; ?></span>
								</div>
								<hr class="my-0">
								<div class="card-body">
									<h5 class="h6 card-title">Settings</h5>
									
                                
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="active" id="v-pills-home-tab" data-toggle="pill" href="#about" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="fas fa-home fa-fw me-1"></span>About</a>
                                    <!-- <a  id="v-pills-profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="fas fa-key fa-fw me-1"></span>Change Password</a>
                                 -->
                                </div>
                                </div>
                                <?php  }?>
							</div>

                        </div>
                        <div class="col-xl-8 col-md-8 mb-8">
                            <div class="card border-left-primary shadow h-100 py-2">


                           
                                
                            <div class="card-body">
                            <div><?php if(isset($message)) { echo $message; } ?></div>
								    <div class="tab-content" id="v-pills-tabContent">

                                    <div class="tab-pane  show active" id="about" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h4>Welcome Co-ordinator</h4>
                                        <hr>
                                    <p>The showcase Judging Application is for coordinating and controlling innovation project, sponsored by Bell. There are going to be three steps to review the project. Students are going to find solutions for the real-world challenges. The sponsors are going to help them in finding solutions.</p>
                                    </div>
    
                                        <div class="tab-pane  " id="profile" role="tabpanel" aria-labelledby="profile-tab"><div class="card-body">
											
                                        <?php if(!empty($response2)) {?>
                                        <div id="update_password_alert" class="alert text-center <?php echo $response2['status']; ?>" role="alert">
                                            <?php echo $response2['message']; ?>
                                        </div>
                                        <?php }?>
                                        <h5 class="card-title">Password</h5>

											<form class="update_password" Name="update_password" id ="update_password" action="profile.php"  enctype="multipart/form-data" method="post">
												<div class="mb-3">
													<label for="inputPasswordCurrent" class="form-label">Current password</label>
													<input type="password" name="currentPassword" class="form-control" id="inputPasswordCurrent">
													
												</div>
												<div class="mb-3">
													<label for="inputPasswordNew" class="form-label">New password</label>
													<input type="password" name="newPassword" class="form-control" id="inputPasswordNew">
												</div>
												<div class="mb-3">
													<label for="inputPasswordNew2" class="form-label">Verify password</label>
													<input type="password" name="verifyPassword" class="form-control" id="inputPasswordNew2">
												</div>
												<button type="submit" name="save" class="btn btn-primary">Save changes</button>
											</form>

										</div>
                                    </div>
							</div>
                            </div>
                        </div>


                    </div>                 
                    <!-- Content Row -->
                    
                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include 'admin-footer.php';?>

</body>

<script>
    $('#myTab a').on('click', function (event) {
    event.preventDefault()
    $(this).tab('show')
    })

   setTimeout(function() {
        // Closing the alert
        $('#update_password_alert').alert('close');
    }, 5000);

    $(function() {
        $("form[name='update_password']").validate({

            rules: {
                password: "required",
                newPassword: "required",
                verifyPassword: "required",

                password: {
                    required: true
                },
                newPassword: {
                    required: true
                },
                verifyPassword:{
                    required: true
                }
                
            },

            messages: {
                password: "Enter Old Password.",
                newPassword: "Enter New Password",
                verifyPassword: "Enter Re-enter Password"
                
                
            },
            submitHandler: function(form) {
                form.submit();

            }

        });
    });
    </script>




</script>
</html>