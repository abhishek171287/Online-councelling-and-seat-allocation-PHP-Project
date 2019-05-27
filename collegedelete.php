<?php
include('session.php');
include 'conn.php';
 $id= $_GET['collegeid'];

 $q = " delete from `participatingcollege` where collegeid=$id";

 mysqli_query($con,$q);

 header('location:updateordeletecolleges.php');


?>