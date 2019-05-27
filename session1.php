<?php
   include('config.php');
   session_start();
   
   $applicationid = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select * from councellingstudents where applicationid = '$applicationid' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['applicationid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login2.php");
      die();
   }
?>