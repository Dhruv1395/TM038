<?php
  $servername="localhost";
  $username="root";
  $pass="";
  $dbname="registration";

 $conn= mysqli_connect( $servername, $username, $pass, $dbname);

 if($conn){
  //echo "ok";
 }
 else{
  echo "not";
 }

?>