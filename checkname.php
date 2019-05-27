<?php
/*include 'conn.php';*/
include('dbconfig.php');


if(isset($_POST["candidatename"]) && !empty($_POST["candidatename"]))
{

			$rollno=$_POST['rollno'];
			$name=$_POST['candidatename']; 

	$query=$db->query("SELECT * FROM  meritlist where rollno='$rollno' and name='$name'");
	 $rowCount=$query->num_rows;
	 if($rowCount>0)
	 {
	 		 	echo 'candidatename and rollno matches';
	 	
	 } 
	 else
	 {
	 	echo "<script type='text/javascript'>alert('candidatename and rollno does match');location.reload(true);</script>";
		header("refresh:1; url=register.php");
	 }
	 
}	 
?>