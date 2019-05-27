<?php
/*include 'conn.php';*/
include('dbconfig.php');


if(isset($_POST["chalan"]) && !empty($_POST["chalan"]))
{

			$chalan=$_POST['chalan']; 

	$query=$db->query("SELECT * FROM  councellingstudents where chalan='$chalan'");
	 $rowCount=$query->num_rows;
	 if($rowCount>0)
	 {
	 	
	 	echo "<script type='text/javascript'>alert('ChalanID Is Already used');location.reload(true);</script>";
		header("refresh:1; url=register.php");
	 } 
	 else
	 {
	 	echo 'ChalanID is not used yet';
	 }
	 
}	 
?>