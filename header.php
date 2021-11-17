<?php
if(!isset($_SESSION)) {
   session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Itsshowcase Fleming Domains</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/admin-dashboard.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top"><img src="./img/header-logo.png"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Projects</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#aboutus">About us</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#contactus">Contact us</a></li>
                    </ul>
                    <!-- <button class="btn btn-primary px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#login_user">
                        <span class="d-flex align-items-center">
                            
                            <span class="small">Login</span>
                        </span>
                    </button> -->
                </div>
            </div>
        </nav>
       
		<!-- Login Modal-->
       <div class="modal fade" id="login_user" tabindex="-1" aria-labelledby="login_useModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">                             

                <div class="card o-hidden border-0">
                
                                        
                            
                            <div class="row justify-content-center">

                                <div class="col-xl-10 col-lg-12 col-md-9">
                                <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="admin.php" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                        <hr>
                                        
                                    </form>
                                
                                
                                </div>
                            </div>                                 
                </div>
            </div>                                       
        </div>         
        </div>
        </div>
    </div>
</div>
<?php //include 'login.php';?>