<?php

include('dbconfig.php');
if(isset($_POST["rank"]) && !empty($_POST["rank"]))
{
	$rank=$_POST["rank"];
	$query=$db->query("SELECT * FROM participatingcollege where closingrank>=".$_POST['rank']." and openingrank<=".$_POST['rank']." and seats>0 ");
	 $rowCount=$query->num_rows;
	 if($rowCount>0)
	 {
	 	echo '<option value="" hidden required="">Select Institute In which you want to take admission for MCA </option>';
	 	while($row=$query->fetch_assoc())
	 	{
	 	echo '<option value="'.$row['collegename'].'">'.$row['collegename'].'</option>';
	 	}
	 }
	 else
	 {
	 	echo '<option value="">No Institutes available for you.You Cannot register for WBJECA 2019 Councelling.</option>';
	 }


}