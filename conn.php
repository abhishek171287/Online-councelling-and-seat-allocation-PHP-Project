<?php
	
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'jeca');

	if($con)
	{
		echo "";

	}
	else
	{
		echo "not connected";
	}	


?>