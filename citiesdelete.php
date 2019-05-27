<?php
include('session.php');
include 'conn.php';
 $id= $_GET['cityid'];

 $q = " delete from `councellingcities` where cityid=$id";

 mysqli_query($con,$q);

 header('location:Updateordeletecounsellingcities.php');





?>