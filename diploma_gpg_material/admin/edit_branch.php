<?php
    include "header.php";
    if(isset($_GET['id']))
       {
         $b_id=$_GET['id']."";
        }
        $qry2="SELECT * FROM tbl_branch WHERE b_id='$b_id'" ;
        $run2=mysqli_query($con,$qry2);
        $result2=mysqli_fetch_array($run2);
        $stream=$result2['b_stream'];
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Branch</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Branch</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form method="post" action="">
                                    <?php
                                        $qry2="SELECT * FROM tbl_branch WHERE b_id='$b_id'" ;
                                        $run2=mysqli_query($con,$qry2);
                                        $result2=mysqli_fetch_array($run2);
                                        $stream=$result2['b_stream'];
                                    ?>
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Stream</label>
                                <select name="stream" class="form-control">
                                    <?php
                                    if($stream==1)
                                    {
                                    ?>
                                  <option value="1">Diploma Engineering</option>
                                  <option value="2">Degree Engineering</option>
                                  <?php
                                        }
                                    else
                                    {
                                    ?>
                                    <option value="2">Degree Engineering</option>
                                  <option value="1">Diploma Engineering</option>
                                  
                                  <?php
                                        }
                                    ?>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Branch Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="branch" aria-describedby="emailHelp" value="<?php echo $result2['b_name']; ?>" required="">
                              </div>
                              
                              <button type="submit" name="submit" class="btn btn-primary">Update</button>
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
        $qry1="UPDATE tbl_branch SET b_name='$name',b_stream='$stream' WHERE b_id='$b_id'";
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