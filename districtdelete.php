<?php
include('session.php');
include 'conn.php';
 $id= $_GET['DistrictID'];

 $q = " delete from `examdistrict` where DistrictID=$id";

 mysqli_query($con,$q);

 header('location:Updateordeletecounsellingdistrict.php');





?>