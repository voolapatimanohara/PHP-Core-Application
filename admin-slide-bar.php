<?php
$usertype = "jude";
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user-graduate"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Itsshowcase</div>
    </a>
    <?php
     $curUrl = trim(basename($_SERVER['REQUEST_URI']));
    //echo $_SESSION['role'];exit;
    if (isset($_SESSION['role']) && $_SESSION['role'] == '0') {
       
    ?>
        <!----------------------------- Admin Menu ------------------------------>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'admin.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="admin.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'admin-judge.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="admin-judge.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Jedges</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'admin-projects.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="admin-projects.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Projects</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'admin-assign-projects.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="admin-assign-projects.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Assign Project to Jedges</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'round-1.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="round-1.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Round 1</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'semi-final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="semi-final.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Semi-finals</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="final.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Finals</span></a>
        </li>
        <!----------------------------------  Admin Menu End ----------------------->
    <?php
    } else {
    ?>
        <!----------------------------------  Jedge Menu ----------------------->

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'judge-dashboard.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="judge-dashboard.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'jedge-round-1.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="jedge-round-1.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Round 1</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'jedge-semi-final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="jedge-semi-final.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Semi-finals</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'jedge-final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="jedge-final.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Finals</span></a>
        </li>

        <!--------- Jedge Menu End --------------------------->
    <?php
    }
    ?>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>