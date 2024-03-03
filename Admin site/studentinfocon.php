<?php
  $servername="localhost";
  $username="root";
  $pass="";
  $dbname="studentinfo";

 $conn= mysqli_connect( $servername, $username, $pass, $dbname);

 if($conn){
  //echo "ok";
 }
 else{
  echo "not";
 }

?>