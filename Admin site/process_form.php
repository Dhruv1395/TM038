<?php
include("studentinfocon.php");

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $skills = $_POST['skills'];
    $achievements = $_POST['achievements'];
    $description = $_POST['description'];

    // Handling file uploads
    $resume_file = '';
    if(isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $resume_file = $_FILES['resume']['name'];
        move_uploaded_file($_FILES['resume']['tmp_name'], "uploads/" . $resume_file);
    }

    $profile_image = '';
    if(isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        $profile_image = $_FILES['profile_image']['name'];
        move_uploaded_file($_FILES['profile_image']['tmp_name'], "uploads/" . $profile_image);
    }

    // SQL query to insert data into the database
    $ins = "INSERT INTO studentinfo (name, email, skills, achievements, description, resume_file, profile_image) 
            VALUES ('$name', '$email', '$skills', '$achievements', '$description', '$resume_file', '$profile_image')";

    $data = mysqli_query($conn, $ins);
    if($data){
        echo "<script>alert('Data inserted successfully!');</script>";
    } else {
        echo "<script>alert('Failed to insert data: " . mysqli_error($conn) . "');</script>";
    }
}
?>
