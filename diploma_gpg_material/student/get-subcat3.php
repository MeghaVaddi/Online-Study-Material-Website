<?php
include "connection.php";
session_start();

$log = $_SESSION['log'];
    //echo "<script>alert('$log');</script>";
    $qry1="SELECT * FROM tbl_login WHERE l_email='$log'";
    $run1=mysqli_query($con,$qry1);
    $result1=mysqli_fetch_array($run1);
    $img=$result1['l_img'];
    $id=$result1['l_id'];
    $name=$result1['l_name'];
    $phone=$result1['l_phone'];
    $l_pass=$result1['l_pass'];
    //echo "<script> alert('$log'); </script>";
    $qry11="SELECT * FROM tbl_detail WHERE l_id='$id'";
    $run11=mysqli_query($con,$qry11);
    $result11=mysqli_fetch_array($run11);
    // $bid = $run1['b_id'];
			 // 	$bstream = $run1['b_stream'];

$category_id = $_POST["category_id"];
$seq=1;
					
			 			

				 		$qry3="SELECT * FROM tbl_material WHERE m_status=2 AND sub_id=$category_id";
				 		$run3=mysqli_query($con,$qry3);
				 		while($result3=mysqli_fetch_array($run3))
				 		{
				 		
				 		$fid = $result3['l_id'];
				 		$qry4="SELECT * FROM tbl_login WHERE l_id=$fid";
				 		$runn=mysqli_query($con,$qry4);
				 		$run4=mysqli_fetch_array($runn);

				 		$qry2="SELECT * FROM tbl_subject WHERE sub_id='$category_id'";
				 		$run2=mysqli_query($con,$qry2);
				 		$result2=mysqli_fetch_array($run2);

				 		if ($result3['m_type'] == 1) 
				 		{
				 			$mtype = "Assignment";
				 		} 
				 		else if($result3['m_type'] == 2)
				 		{
				 			$mtype = "Practical";	
				 		}
				 		else if($result3['m_type'] == 3)
				 		{
				 			$mtype = "Question Bank";	
				 		}
				 		else if($result3['m_type'] == 4)
				 		{
				 			$mtype = "GTU Paper";	
				 		}
				 		else
				 		{
				 			$mtype = "Notes";		
				 		}
				 		echo '<tr>
								<td>'.$seq.'</td>
								<td>'.$run4['l_name'].'</td>
								<td>'.$result2['sub_name'].'</td>
								<td>'.$mtype.'</td>
								<td>'.$result3['m_name'].'</td>
								<td><a href="'.$result3['m_material'].'" target="_blank">View</a></td>
							  </tr>';
							

			 		}
			 		if(!$result3)
							{
								echo '
								Nothing Added from Faculty Side
							  ';
							}
?>