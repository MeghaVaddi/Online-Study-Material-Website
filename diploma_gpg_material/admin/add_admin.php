<?php
    include "header.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Admin</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Admin</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form method="post" action="insert_admin.php">
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Name" required="">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter Email" required="">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputPassword1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Enter Phone Number" required="">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <textarea class="form-control" placeholder="Enter Address" name="add" rows="3" required=""></textarea>
                              </div>
                              
                              <button type="submit" name="submit" class="btn btn-primary">Add</button>
                            </form>

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