<?php
   session_start();
   


   if(session_destroy()) 
   {
   	include("config.php");
      $sql = "UPDATE COUNTER SET COUNTER=COUNTER + 1" ;
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      header("Location: adminlogin.php");
      
   }


?>