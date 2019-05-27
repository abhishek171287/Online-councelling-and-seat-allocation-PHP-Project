<?php
include('session.php');
include 'conn.php';
 $id= $_GET['meritid'];

$sql="SELECT * FROM meritlist where meritid=$id";
 mysqli_query($con,$sql);

   $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
$rollno=$row['rollno'];
 
$sql1="SELECT * FROM councellingstudents where rollno=$rollno";
 mysqli_query($con,$sql1);

   $row1 = mysqli_fetch_array($sql1,MYSQLI_ASSOC);
$institute=$row1['institute'];

$sql2="UPDATE participatingcollege SET seats=seats + 1 where collegename='$institute' ";
 mysqli_query($con,$sql2);

 $q = " delete from `meritlist` where meritid=$id";
 mysqli_query($con,$q);

 header('location:updateordeletemeritlist.php');


?>