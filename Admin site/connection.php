<?php
  $servername="localhost";
  $username="root";
  $pass="";
  $dbname="portfolioform";

 $conn= mysqli_connect( $servername, $username, $pass, $dbname);

 if($conn){
  //echo "ok";
 }
 else{
  echo "not";
 }

?>