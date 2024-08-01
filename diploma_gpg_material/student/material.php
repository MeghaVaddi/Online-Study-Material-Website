<?php
	session_start();
    // if(!isset($_SESSION['log']))
    // {
    //     include 'header.php';
    // }
    // else
    // {
      include 'header1.php';
    // }
?>
<div class="inner_page_agile"></div>
<!-- short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.php">Home</a>
					<span>| |</span>
				</li>
				<li>Material</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<br>
	<div class="container">
		<!--<div class="well">
			<?php 
				$qry1="SELECT * FROM tbl_detail WHERE l_id=$id";
			 	$run1=mysqli_fetch_array(mysqli_query($con,$qry1));
			 	$bid = $run1['b_id'];
			 	$bstream = $run1['b_stream'];
			?>
			<div class="row">
				<div class="col-md-6 agileits-w3layouts">
					Branch&nbsp;:&nbsp; 
					<?php 
						$qry2="SELECT * FROM tbl_branch WHERE b_id=$bid AND b_status =1";
			 			$run2=mysqli_fetch_array(mysqli_query($con,$qry2));
						echo $run2['b_name']; 
					?>
				</div>
				<div class="col-md-6 agileits-w3layouts">
					Stream&nbsp;:&nbsp; 
					<?php 
						if($run1['b_stream'] == 1){echo "Diploma Engineering";}
						else{echo "Degree Engineering";}
					?>
				</div>
			</div>

		</div>-->

		 <form method="POST" action="">

  <select name="area" class="form-control" id="category-dropdown" style="margin-bottom:2%;">
    <option value="">Select</option>
                                    <option value="1">Diploma</option>
                                    <option value="2">Degree</option>
  </select>
  <select name="branch" class="form-control" id="sub-category-dropdown" style="margin-bottom:2%;">
                                   
                                  <option value="">Select</option>
                                  
                                </select>

                                <select name="subject" class="form-control" id="sub-category-dropdown2" style="margin-bottom:2%;">
                                   
                                  <option value="">Select</option>
                                  
                                </select>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sr.No</th>
					<th>Faculty Name</th>
					<th>Subject</th>
					<th>Material Type</th>
					<th>Material Name</th>
					<th>View</th>
				</tr>
			</thead>
			<tbody id="sub-category-dropdown3">
				
				<!-- <tr>
					<td>1</td>
					<td>fac</td>
					<td>dbms</td>
					<td>notes</td>
					<td>material</td>
					<td><a href="photos/" target="_blank">View</a></td>
				</tr> -->
				<tr>
					
				</tr>
			</tbody>
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
                        url: "get-subcat2.php",
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

        <script>
            $(document).ready(function() {
                $('#sub-category-dropdown2').on('change', function() {
                    var category_id = this.value;
                     //alert(category_id);
                    $.ajax({
                        url: "get-subcat3.php",
                        type: "POST",
                        data: {
                            category_id: category_id
                        },
                        cache: false,
                        success: function(result) {
                            $("#sub-category-dropdown3").html(result);
                        }
                    });
                });
            });

        </script>
		</table>
		</form>
 	</div>

<?php
	include 'footer.php';

?>