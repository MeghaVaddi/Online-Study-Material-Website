<?php
    include "header.php";
?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manage Subject</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Manage Subject</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Stream</th>
                                            <th>Branch</th>
                                             <th>Subject</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <?php
                                        $seq=1;
                                        $qry1="SELECT * FROM tbl_subject WHERE sub_status='1'";
                                        $run1=mysqli_query($con,$qry1);
                                        while($result1=mysqli_fetch_array($run1))
                                        {
                                            $stream=$result1['b_stream'];
                                            $b_id=$result1['b_id'];

                                            $qry2="SELECT * FROM tbl_branch WHERE b_id='$b_id'";
                                            $run2=mysqli_query($con,$qry2);
                                            $result2=mysqli_fetch_array($run2);
                                        ?>
                                        <tr>
                                            <td><?php echo $seq; ?></td> 
                                            <?php
                                            if($stream==1)
                                            {
                                            ?>
                                             <td><?php echo "Diploma Engineering"; ?></td>
                                             <?php
                                            }
                                            else
                                            {
                                             ?>
                                              <td><?php echo "Degree Engineering"; ?></td>
                                             <?php
                                            }

                                            ?>
                                            <td><?php echo $result2['b_name']; ?></td>
                                            <td><?php echo $result1['sub_name']; ?></td>
                                            
                                            <td>
                                                 <a href="edit_subject.php?id=<?php echo $result1['sub_id'];?> " 
                                                    class="btn btn-success btn-circle btn"><i class="fas fa-edit"></i></a>
                                                <a href="?del=<?php echo $result1['sub_id'];?>" onclick="return confirm(' Sure to Delete');" class="btn btn-danger btn-circle btn"><i class="fas fa-trash"></i></a>

                                            </td>
                                        </tr>
                                        <?php
                                            $seq++;
                                        }
                                         if(isset($_GET['del']))
                                                       {
                                                     // $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
                                                      $sql="UPDATE tbl_subject SET sub_status='0' WHERE sub_id=".$_GET['del']."";
                                                      $resultt=mysqli_query($con,$sql);
                                                    if($resultt)
                                                        {
                                                          echo ("<script>location.href='manage_subject.php'</script>");
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