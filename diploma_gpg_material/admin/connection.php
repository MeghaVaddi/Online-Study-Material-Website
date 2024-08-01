<?php
	
	$con = mysqli_connect('localhost','root','','gpg_material');
	
	if(!$con)
	{
		echo "Server not found...";
	}else{mysqli_select_db($con,'gpg_material');}	
	/*
	if(!mysqli_select_db($con,'lawyer'))
	{
		echo "Database not found...";
	}*/

?>