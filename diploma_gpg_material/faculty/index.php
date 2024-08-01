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
                                                Material</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(m_id) FROM tbl_material WHERE m_status='1' OR m_status='2' AND l_id='$id'"));
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

                       

                        </div>

                   
                   


                    


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php
    include "footer.php";
?>