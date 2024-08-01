<?php
    include "header.php";
    if(isset($_GET['id']))
       {
        $l_id=$_GET['id']."";
      //echo "<script>alert('$d_id');</script>";
       }
       $qry1="SELECT * FROM tbl_login WHERE l_id='$l_id'";
       $run1=mysqli_query($con,$qry1);
       $result1=mysqli_fetch_array($run1);
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Student</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Student</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form method="post" action="">
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="<?php echo $result1['l_name']; ?>" required="">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp"  value="<?php echo $result1['l_email']; ?>" required="">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputPassword1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="phone"  value="<?php echo $result1['l_phone']; ?>" required="">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <textarea class="form-control" placeholder="Enter Address" name="add" rows="3" required=""> <?php echo $result1['l_add']; ?></textarea>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Stream</label>
                                <select name="stream" class="form-control" id="category-dropdown">
                                    <?php
                                    $qry2="SELECT * FROM tbl_detail WHERE l_id='$l_id'";
                                    $run2=mysqli_query($con,$qry2);
                                    $result2=mysqli_fetch_array($run2);
                                    $b_id=$result2['b_id'];
                                    if($result2['b_stream']==1)
                                    {
                                    ?>
                                    <option value="">Select</option>
                                    <option value="1" selected>Diploma</option>
                                    <option value="2">Degree</option>
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                    <option value="">Select</option>
                                    <option value="1" >Diploma</option>
                                    <option value="2" selected>Degree</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Branch</label>
                                <select name="branch" class="form-control" id="sub-category-dropdown">>
                                   <?php
                                   $qry3="SELECT * FROM tbl_branch WHERE b_id='$b_id'";
                                   $run3=mysqli_query($con,$qry3);
                                   $result3=mysqli_fetch_array($run3);
                                   ?>
                                  <option value="<?php echo $result3['b_id']; ?>"><?php echo $result3['b_name']; ?></option>
                                  
                                </select>
                              </div>
                              <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#category-dropdown').on('change', function() {
                    var category_id = this.value;
                    $.ajax({
                        url: "get-subcat1.php",
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
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['add'];
        $stream = $_POST['stream'];
        $branch = $_POST['branch'];

        $qry4="UPDATE tbl_login SET l_name='$name',l_phone='$phone',l_email='$email',l_add='$address' WHERE l_id='$l_id'";
        $run4=mysqli_query($con,$qry4);

        $qry5="UPDATE tbl_detail SET b_stream='$stream',b_id='$branch' WHERE l_id='$l_id'";
        $run5=mysqli_query($con,$qry5);

        if($run5)
        {
            echo ("<script>location.href='manage_student.php'</script>");
        }

    }
?>