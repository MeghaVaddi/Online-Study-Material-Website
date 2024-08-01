<?php
    include "header.php";
   
       $qry1="SELECT * FROM tbl_login WHERE l_id='$id'";
       $run1=mysqli_query($con,$qry1);
       $result1=mysqli_fetch_array($run1);
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Change Password</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form method="post" action="">
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Old Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" name="pass" aria-describedby="emailHelp" placeholder="Enter Old Password" required="">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">New Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" name="pass1" aria-describedby="emailHelp" placeholder="Enter New Password" required="">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" name="pass2" aria-describedby="emailHelp" placeholder="Confirm New Password" required="">
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
        $pass=$_POST['pass'];   
        $pass1=$_POST['pass1'];
        $pass2=$_POST['pass2'];
        if($l_pass==$pass)
        {
            if($pass1==$pass2)
            {
                $qry1="UPDATE tbl_login SET l_pass='$pass2' WHERE l_id='$id'";
                $run1=mysqli_query($con,$qry1);
                if($run1)
                {
                    echo "<script> alert('Password Changed'); </script>";
                    echo "<script> location.replace('index.php'); </script>";    
                }
            }
            else
            {
                echo "<script> alert('Both the Passwords are Different'); </script>";
                echo "<script> location.replace('change_pass.php'); </script>";
            }
        }
        else
        {
            echo "<script> alert('Incorrect Old Password'); </script>";
            echo "<script> location.replace('change_pass.php'); </script>";
        }

    }
?>