<?php
    include "header.php";
?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Feedback</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Feedback</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Image</th>
                                            <th>Feedback</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <?php
                                        $seq=1;
                                        $qry1="SELECT * FROM tbl_feedback WHERE f_status='1'";
                                        $run1=mysqli_query($con,$qry1);
                                        while($result1=mysqli_fetch_array($run1))
                                        {
                                            $l_id=$result1['l_id'];

                                            $qry2="SELECT * FROM tbl_login WHERE l_id='$l_id'";
                                            $run2=mysqli_query($con,$qry2);
                                            $result2=mysqli_fetch_array($run2);
                                        

                                        ?>
                                        <tr>
                                            <td><?php echo $seq; ?></td>
                                            <td><?php echo $result2['l_name']; ?></td>
                                            <td><?php echo $result2['l_email']; ?></td>
                                            <td><?php echo $result2['l_phone']; ?></td>
                                            <td class="p"><?php echo $result2['l_add']; ?></td>
                                            
                                            <td><img src="<?php echo $result2['l_img']; ?>" width="50px" height="50px"></td>
                                            <td class="p"><?php echo $result1['feedback']; ?></td>
                                            <td><a href="?del=<?php echo $result1['f_id'];?>" onclick="return confirm(' Sure to Delete');" class="btn btn-danger btn-circle btn"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                        <?php
                                            $seq++;
                                        }
                                         if(isset($_GET['del']))
                                                       {
                                                     // $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
                                                      $sql="UPDATE tbl_feedback SET f_status='0' WHERE f_id=".$_GET['del']."";
                                                      $resultt=mysqli_query($con,$sql);
                                                    if($resultt)
                                                        {
                                                          echo ("<script>location.href='feedback.php'</script>");
                                                        }
                                                    
                                                       }
                                        ?>
                                    </tfoot>
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
               
<?php
    include "footer.php";
?>