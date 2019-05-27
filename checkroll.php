<?php
/*include 'conn.php';*/
include('dbconfig.php');
if(isset($_POST["rollno"]) && !empty($_POST["rollno"]))
{
	$query=$db->query("SELECT * FROM  meritlist where rollno=".$_POST['rollno']." ");
	 $rowCount=$query->num_rows;
	 $query1=$db->query("SELECT * FROM  councellingstudents where rollno=".$_POST['rollno']." ");
	 $rowCount1=$query1->num_rows;
	 if($rowCount>0)
	 {
	 	echo"Roll no exists";
	 } 
	 
	  else 
	 {
	 	echo "<script type='text/javascript'>alert('candidate has not given WBJECA in 2019');location.reload(true);</script>";
		header("refresh:1; url=register.php");
	 }
	  if($rowCount1>0)
	 {
	 	echo "<script type='text/javascript'>alert('Candidate has Already registered');location.reload(true);</script>";
		header("refresh:1; url=register.php");
	 } 
}	 
?>