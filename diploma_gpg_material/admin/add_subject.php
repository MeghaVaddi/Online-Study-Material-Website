<?php
    include "header.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Subject</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Subject</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form method="post" action="">
                                    <div class="form-group">
                                <label for="exampleInputEmail1">Stream</label>
                                <select name="stream" class="form-control" id="category-dropdown">
                                    <option value="">Select</option>
                                    <option value="1">Diploma Engineering</option>
                                    <option value="2">Degree Engineering</option>

                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Branch</label>
                                <select name="branch" class="form-control" id="sub-category-dropdown">
                                   
                                  <option value="">Select</option>
                                  
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Subject Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="subject" aria-describedby="emailHelp" placeholder="Enter Subject Name" required="">
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
  if(isset($_POST['submit']))
    {
        $stream=$_POST['stream'];
        $branch=$_POST['branch'];
        //echo "<script> alert($stream); </script>";
        $subject=$_POST['subject'];

        $qry1="INSERT INTO tbl_subject(sub_id,sub_name,sub_status,b_stream,b_id)VALUES('','$subject','1','$stream','$branch')";
         $run1=mysqli_query($con,$qry1);
         if($run1)
         {
             echo "<script>  alert('Subject Added'); </script>";
             echo "<script>window.location.href='manage_subject.php'</script>"; 
            
         }
    }
?>