<?php
include('session.php');
include 'conn.php';
 $id= $_GET['applicationid'];
 $name=$_GET['seats'];

 $q2="SELECT * FROM 'councellingstudents' WHERE applicationid=$id";
 $res =mysqli_fetch_array($con,$q2);
 $institute=$res['institute'];
mysqli_query($con,$q2);

 $q = "DELETE FROM `councellingstudents` WHERE applicationid=$id";


 $q1="update participatingcollege set seats=seats + 1  where collegename=$institute";
mysqli_query($con,$q1);
 mysqli_query($con,$q);

 header('location:councellingstudents.php');





?>