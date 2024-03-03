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
        h1{
            text-align:center;
        }
        
    </style>
</head>
<body>
    <h1>Students information</h1>
</body>
</html>
<?php
include("studentinfocon.php");

// Fetch data from the studentinfo table
$result = mysqli_query($conn, "SELECT * FROM studentinfo");

echo "<center><table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Skills</th><th>Achievements</th><th>Description</th><th>Resume File</th><th>Profile Image</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['skills']."</td>";
    echo "<td>".$row['achievements']."</td>";
    echo "<td>".$row['description']."</td>";
    echo "<td><a href='uploads/".$row['resume_file']."' target='_blank'>View Resume</a></td>";
    echo "<td><img src='uploads/".$row['profile_image']."' width='100' height='100'></td>";
    
    echo "</tr>";
}
echo "</table></center>";

mysqli_close($conn);
?>
