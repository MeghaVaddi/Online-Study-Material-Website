<?php
    
include "connection.php";
session_start();
    
    if(!isset($_SESSION['log']))
    {
        header("location:login.php");
    }
    
    else
    {
        $log = $_SESSION['log'];
        //echo "<script>alert('$log');</script>";
        $qry1="SELECT * FROM tbl_login WHERE l_email='$log'";
        $run1=mysqli_query($con,$qry1);
        $result1=mysqli_fetch_array($run1);
        $img=$result1['l_img'];
        $name=$result1['l_name'];
        $email=$result1['l_email'];
        $phone=$result1['l_phone'];
        $add=$result1['l_add'];
        $id=$result1['l_id'];
        $status=$result1['l_status'];
         $l_pass=$result1['l_pass'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GPG Study Material</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
    .p {
max-width: 300px;
max-height: 400px;
white-space: nowrap;
overflow: auto;
}​
</style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GPG Study Material </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Navigation
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFirst"
                    aria-expanded="true" aria-controls="collapseFirst">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Material</span>
                </a>
                <div id="collapseFirst" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Material</h6>
                        <a class="collapse-item" href="add_material.php">Add Material</a>
                        <a class="collapse-item" href="manage_material.php">Manage Material</a>
                    </div>
                </div>
            </li>
           <li class="nav-item">
                <a class="nav-link" href="edit_profile.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="change_pass.php">
                    <i class="fas fa-fw fa-lock"></i>
                    <span>Change Password</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="change_pass.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
                    <span>Logout</span></a>
            </li>
           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo $img; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="edit_profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="change_pass.php">
                                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
