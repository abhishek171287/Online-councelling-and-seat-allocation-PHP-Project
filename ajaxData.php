<?php

include('dbconfig.php');
if(isset($_POST["stateid"]) && !empty($_POST["stateid"]))
{
	$query=$db->query("SELECT * FROM  district where stateid=".$_POST['stateid']." ORDER BY district ASC");
	 $rowCount=$query->num_rows;
	 if($rowCount>0)
	 {
	 	echo '<option value="" hidden required="">Select District </option>';
	 	while($row=$query->fetch_assoc())
	 	{
	 	echo '<option value="'.$row['districtid'].'">'.$row['district'].'</option>';

	 	}


	 }
	 else
	 {
	 	echo '<option value="">District not available</option>';
	 }


}










?>