<?php
    include "header.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Faculty</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Faculty</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form method="post" action="insert_faculty.php">
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

                              <div class="form-group">
                                <label for="exampleInputEmail1">Stream</label>
                                <select name="stream" class="form-control" id="category-dropdown">
                                    <option value="">Select</option>
                                    <option value="1">Diploma</option>
                                    <option value="2">Degree</option>

                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Branch</label>
                                <select name="branch" class="form-control" id="sub-category-dropdown">>
                                   
                                  <option value="">Select</option>
                                  
                                </select>
                              </div>
                              <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#category-dropdown').on('change', function() {
                    var category_id = this.value;
                    $.ajax({
                        url: "get-subcat.php",
                        type: "POST",
                        data: {
                            category_id: category_id
                        },
                        cache: false,
                        success: function(result) {
                            $("#sub-category-dropdown").html(result);
                        }
                    });
                });
            });
        </script>
                              
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