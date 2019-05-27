<?php
/*include 'conn.php';*/
include('dbconfig.php');
if(isset($_POST["rollno"]) && !empty($_POST["rollno"]))
{
	$query=$db->query("SELECT * FROM  meritlist where rollno=".$_POST['rollno']." ");
	 $rowCount=$query->num_rows;
	 
	 if($rowCount>0)
	 {
	 	echo "<script type='text/javascript'>alert('rollno exist');location.reload(true);</script>";
		header("refresh:1; url=meritlist.php");
	 } 
	 
	  else 
	 {
	 	echo "roll no is new";	
	 }
	  
}	 
?>