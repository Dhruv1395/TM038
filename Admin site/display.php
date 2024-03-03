<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#FEF5E7  ;
        }
        table{
            background-color:white;
            
        }
        
    </style>
</head>
<body>
    
</body>
</html>
<?php
include("regcon.php");
$query = "SELECT * FROM reg";
$result = mysqli_query($conn, $query);
$total = mysqli_num_rows($result);

if($total > 0){ // Checking if there are rows returned by the query
?>
      <h1 style="text-align:center;">Saurashtra University User's Records</h1>
   <center> <table border=4px cellspacing=10>
        <tr>
        <th>Id</th>
        <th>First name</th>
        <th>Last name</th>
        <th>DOB</th>
        <th>E-mail</th>
        <th>Phone number</th>
        <th>Password</th>
        </tr>

    <?php
    while($info=mysqli_fetch_assoc($result)){
       echo "<tr>
            <td>".$info['id']."</td>
            <td>".$info['fname']."</td>
            <td>".$info['lname']."</td>
            <td>".$info['dob']."</td>
            <td>".$info['email']."</td>
            <td>".$info['pnum']."</td>
            <td>".$info['pass']."</td>

        </tr>";
    }
}
?>
</table>;
</center>

