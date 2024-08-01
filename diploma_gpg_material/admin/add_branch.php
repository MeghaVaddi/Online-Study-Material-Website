<?php
    include "header.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Branch</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Branch</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form method="post" action="">
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Stream</label>
                                <select name="stream" class="form-control">
                                  <option value="1">Diploma Engineering</option>
                                  <option value="2">Degree Engineering</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Branch Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="branch" aria-describedby="emailHelp" placeholder="Enter Branch Name" required="">
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
  if(isset($_POST['submit']))
    {
        $name=$_POST['branch'];
        $stream=$_POST['stream'];
        $qry1="INSERT INTO tbl_branch(b_id,b_name,b_stream,b_status)VALUES('','$name','$stream','1')";
        $run1=mysqli_query($con,$qry1);
        if($run1)
        {
            echo ("<script>location.href='manage_branch.php'</script>");
        }
        else
        {
            echo "<script>alert('Branch not Added'); </script>";
            echo ("<script>location.href='add_branch.php'</script>");
        }
    }
?>