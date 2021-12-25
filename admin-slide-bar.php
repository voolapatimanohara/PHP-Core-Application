<div class="side-menu">
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
                <i class="fas fas fa-gavel"></i>
                <span>Judges</span></a>
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
                <i class="fas fa-fw fa-project-diagram"></i>
                <span>Projects</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <!-- <li class="nav-item <?php /* if ($curUrl == 'admin-assign-projects.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } */ ?>">
            <a class="nav-link" href="admin-assign-projects.php">
            <i class="fas fa-user-plus"></i>
                <span>Assign Project to Judges</span></a>
        </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'round-1.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="round-1.php">
                <i class="fas fa-money-bill-alt"></i>
                <span>Round 1</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'round1-results.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="round1-results.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Round 1 Results</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'semi-final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="#">
            <i class="fas fa-tasks"></i>
                <span>Semi-Finals</span></a>
        </li>
        <li class="nav-item <?php if ($curUrl == 'semi-final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="#">
            <i class="fas fa-tasks"></i>
                <span>Semi-Finals Re</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="#">
            <i class="fas fa-trophy"></i>
                <span>Finals</span></a>
        </li>
        <li class="nav-item <?php if ($curUrl == 'final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="#">
            <i class="fas fa-trophy"></i>
                <span>Finals Result</span></a>
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
            <i class="fas fa-money-bill-alt"></i>
                <span>Round 1</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'judge-round1-results.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="judge-round1-results.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Round 1 Results</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'jedge-semi-final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="#">
            <i class="fas fa-tasks"></i>
                <span>Semi-Finals</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'judge-round2-results.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Semi-final Results</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'jedge-final.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="#">
            <i class="fas fa-trophy"></i>
                <span>Finals</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($curUrl == 'judge-final-results.php') {
                                echo 'active';
                            } else {
                                echo 'inactive';
                            } ?>">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Final Results</span></a>
        </li>
                      
   
    <?php
    }
    ?>
    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->
</ul>
</div>