<?php
    include "header.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Material</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Material</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <form method="post" action="">

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
                               <select name="branch" class="form-control" id="sub-category-dropdown">
                                   
                                  <option value="">Select</option>
                                  
                                </select>
                              </div>


                                    <div class="form-group">
                                <label for="exampleInputEmail1">Subject</label>
                                <select name="subject" class="form-control" id="sub-category-dropdown2">
                                   
                                  <option value="">Select</option>
                                  
                                </select>
                              </div>

                               <div class="form-group">
                                <label for="exampleInputEmail1">Material Type</label>
                                <select class="form-control" name=type>
                                  
                                  <option value="1">Assignment</option>
                                  <option value="2">Practical</option>
                                  <option value="3">Question Bank</option>
                                  <option value="4">GTU Paper</option>
                                  <option value="5">Notes</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Material Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Material Name" name="name" required="">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Material</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" name="material" required="">
                              </div>
                              
                              <button type="submit" name="submit" class="btn btn-primary">Add</button>


                              <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
      <script>
            $(document).ready(function() {
                $('#category-dropdown').on('change', function() {
                    var category_id = this.value;
                     //alert(category_id);
                    $.ajax({
                        url: "../admin/get-subcat.php",
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

       
         <script>
            $(document).ready(function() {
                $('#sub-category-dropdown').on('change', function() {
                    var category_id = this.value;
                     //alert(category_id);
                    $.ajax({
                        url: "../student/get-subcat2.php",
                        type: "POST",
                        data: {
                            category_id: category_id
                        },
                        cache: false,
                        success: function(result) {
                            $("#sub-category-dropdown2").html(result);
                        }
                    });
                });
            });

        </script>

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
      $type=$_POST['type'];
      $name=$_POST['name'];
      $material="photos/".$_POST['material'];
      $stream=$_POST['stream'];
       $branch=$_POST['branch'];
       // $subject=$_POST['subject'];
      //echo "<script> alert('$material'); </script>";
      $qry3="INSERT INTO tbl_material(m_id,m_type,m_material,m_name,m_status,l_id,sub_id)VALUES('','$type','$material','$name','1','$id','$subject')";
      $run3=mysqli_query($con,$qry3);
      if($run3)
      {
         echo ("<script>location.href='manage_material.php'</script>");
      }
    }
?>