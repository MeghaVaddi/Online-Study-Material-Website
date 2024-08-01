<?php
    include "header.php";
   
       $qry1="SELECT * FROM tbl_login WHERE l_id='$id'";
       $run1=mysqli_query($con,$qry1);
       $result1=mysqli_fetch_array($run1);
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Profile</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
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
                                <label for="exampleInputPassword1">Upload New Image</label>
                                <input type="file" class="form-control" name="image">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputPassword1">Current Image</label>
                                <img src="<?php echo $img; ?>" width="120px" height="120px">
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

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $add=$_POST['add'];
        $image=$_POST['image'];
        //echo "Hello".$image;
        if($image=="")
        {
            $qry1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add' WHERE l_id='$id'";
            $run1=mysqli_query($con,$qry1);
            if($run1)
            {
                echo "<script> alert('Profile Updated'); </script>";
                echo "<script> location.replace('index.php'); </script>";    
            }
            else
            {
                echo "<script> alert('Profile Not Updated'); </script>";
                echo "<script> location.replace('edit_profile.php'); </script>";    
            }
        }
        else
        {
            $location="photos/".$image;
            $qry1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add', l_img='$location' WHERE l_id='$id'";
            $run1=mysqli_query($con,$qry1);
            if($run1)
            {
                echo "<script> alert('Profile Updated'); </script>";
                echo "<script> location.replace('index.php'); </script>";    
            }
            else
            {
                echo "<script> alert('Profile Not Updated'); </script>";
                echo "<script> location.replace('edit_profile.php'); </script>";    
            }   
        }

    }
?>