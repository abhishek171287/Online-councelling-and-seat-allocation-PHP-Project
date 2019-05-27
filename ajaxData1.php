<?php

include('dbconfig.php');
if(isset($_POST["rollno"]) && !empty($_POST["rollno"]))
{
	$query=$db->query("SELECT * FROM meritlist where rollno=".$_POST['rollno']." ORDER BY meritid ASC");
	 $rowCount=$query->num_rows;
	 if($rowCount>0)
	 {
	 	echo '<option value="" hidden required="">Select RANK </option>';
	 	while($row=$query->fetch_assoc())
	 	{
	 	echo '<option value="'.$row['gmr'].'">'.$row['gmr'].'</option>';

	 	}


	 }
	 else
	 {
	 	echo '<option value="">Rank not available</option>';
	 }


}