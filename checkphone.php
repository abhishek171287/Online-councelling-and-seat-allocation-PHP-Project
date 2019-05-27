<?php
/*include 'conn.php';*/
include('dbconfig.php');


if(isset($_POST["mobile"]) && !empty($_POST["mobile"]))
{

			$mobile=$_POST['mobile']; 

	$query=$db->query("SELECT * FROM  councellingstudents where mobile='$mobile'");
	 $rowCount=$query->num_rows;
	 if($rowCount>0)
	 {
	 	
	 	echo "<script type='text/javascript'>alert('Mobile Number Is Already used');location.reload(true);</script>";
		header("refresh:1; url=register.php");
	 } 
	 else
	 {
	 	echo 'Mobile Number is not used yet';
	 }
	 
}	 
?>