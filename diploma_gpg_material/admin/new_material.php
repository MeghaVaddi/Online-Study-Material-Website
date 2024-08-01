<?php
    include "header.php";
?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">New Material</h1>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">New Material</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Faculty</th>
                                            <th>Subject</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Material</th>
                                            <th>Approve</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <?php
                                        $seq=1;
                                        $qry1="SELECT * FROM tbl_material WHERE m_status='1'";
                                        $run1=mysqli_query($con,$qry1);
                                        while($result1=mysqli_fetch_array($run1))
                                        {
                                            $type=$result1['m_type'];
                                            $l_id=$result1['l_id'];
                                            $qry2="SELECT * FROM tbl_login WHERE l_id='$l_id'";
                                            $run2=mysqli_query($con,$qry2);
                                            $result2=mysqli_fetch_array($run2);

                                            $sub_id=$result1['sub_id'];
                                             $qry3="SELECT * FROM tbl_subject WHERE sub_id='$sub_id'";
                                            $run3=mysqli_query($con,$qry3);
                                            $result3=mysqli_fetch_array($run3);
                                        ?>
                                        <tr>
                                            <td><?php echo $seq; ?></td>
                                            <td><?php echo $result2['l_name']; ?></td>
                                            <td><?php echo $result3['sub_name']; ?></td>
                                            <td><?php echo $result1['m_name']; ?></td>

                                            <?php
                                            if($type==1)
                                            {
                                                echo "<td>Assigment</td>";
                                            }
                                            else if($type==2)
                                            {
                                                echo "<td>Pracical</td>";
                                            }
                                            else if($type==3)
                                            {
                                                echo "<td>Question Bank</td>";
                                            }
                                            else if($type==4)
                                            {
                                                echo "<td>GTU Paper</td>";
                                            }
                                            else
                                            {
                                                echo "<td>Notes</td>";
                                            }
                                            ?>

                                           <td><a href="<?php echo $result1['m_material']; ?>" target="_blank" class="btn btn-success btn-circle btn"><i class="fas fa-book"></i></a></td>
                                            <td><a href="?del=<?php echo $result1['m_id'];?>" onclick="return confirm(' Sure to Approve');" class="btn btn-success btn-circle btn"><i class="fas fa-check"></i></a></td>
                                            <td><a href="?dell=<?php echo $result1['m_id'];?>" onclick="return confirm(' Sure to Delete');" class="btn btn-danger btn-circle btn"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                        <?php
                                            $seq++;
                                        }
                                         if(isset($_GET['del']))
                                                       {
                                                     // $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
                                                      $sql="UPDATE tbl_material SET m_status='2' WHERE m_id=".$_GET['del']."";
                                                      $resultt=mysqli_query($con,$sql);
                                                    if($resultt)
                                                        {
                                                          echo ("<script>location.href='verified_material.php'</script>");
                                                        }
                                                    
                                                       }
                                            if(isset($_GET['dell']))
                                                       {
                                                     // $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
                                                      $sql="UPDATE tbl_material SET m_status='0' WHERE m_id=".$_GET['dell']."";
                                                      $resultt=mysqli_query($con,$sql);
                                                    if($resultt)
                                                        {
                                                          echo ("<script>location.href='new_material.php'</script>");
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