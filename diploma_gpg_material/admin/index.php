<?php
    include "header.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Admin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE l_status='1' AND l_role='1'"));
                         echo $count1[0];
                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Faculty</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE l_status='1' AND l_role='2'"));
                         echo $count1[0];
                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Total Student</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE l_status='1' AND l_role='3'"));
                         echo $count1[0];
                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Branch</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(b_id) FROM tbl_branch WHERE b_status='1'"));
                         echo $count1[0];
                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-th fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Subject</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                 <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(sub_id) FROM tbl_subject WHERE sub_status='1'"));
                         echo $count1[0];
                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                New Material</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                 <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(m_id) FROM tbl_material WHERE m_status='1'"));
                         echo $count1[0];
                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Verfied Material
                                            </div>
                                            
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(m_id) FROM tbl_material WHERE m_status='2'"));
                         echo $count1[0];
                        ?>
                                                    </div>
                                                </div>
                                                
                                        <div class="col-auto">
                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Feedback</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(f_id) FROM tbl_feedback WHERE f_status='1'"));
                         echo $count1[0];
                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-star fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

     
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Contact</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                 <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(c_id) FROM tbl_contact WHERE c_status='1'"));
                         echo $count1[0];
                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>                    

                    


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php
    include "footer.php";
?>