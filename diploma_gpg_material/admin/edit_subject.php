<?php
    include "header.php";
    if(isset($_GET['id']))
       {
         $sub_id=$_GET['id']."";
        }
        
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Subject</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Subject</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form method="post" action="">
                                   
                                 <?php
                                        $qry2="SELECT * FROM tbl_subject WHERE sub_id='$sub_id'" ;
                                        $run2=mysqli_query($con,$qry2);
                                        $result2=mysqli_fetch_array($run2);
                                        $stream=$result2['b_stream'];
                                    ?>
                         

                              <div class="form-group">
                                <label for="exampleInputEmail1">Subject Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="subject" aria-describedby="emailHelp" value="<?php echo $result2['sub_name']; ?>" required="">
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
        $subject=$_POST['subject'];
        //echo "<script> alert($stream); </script>";
       

        $qry1="UPDATE tbl_subject SET sub_name='$subject' WHERE sub_id='$sub_id'";
         $run1=mysqli_query($con,$qry1);
         if($run1)
         {
             echo "<script>window.location.href='manage_subject.php'</script>"; 
         }
    }
?>