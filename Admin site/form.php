<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
    margin-top: 50px;
    color: #333;
}

form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="file"] {
    margin-top: 5px;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    
}

input[type="submit"]:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <h2>Student Information Form</h2>
    <form action="process_form.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="skills">Skills:</label><br>
        <textarea id="skills" name="skills"></textarea><br>

        <label for="achievements">Achievements:</label><br>
        <textarea id="achievements" name="achievements"></textarea><br>

        <label for="description">Brief Description:</label><br>
        <textarea id="description" name="description"></textarea><br>

        <label for="resume">Upload Resume (PDF):</label><br>
        <input type="file" id="resume" name="resume" accept="application/pdf"><br>

        <label for="profile_image">Upload Profile Image:</label><br>
        <input type="file" id="profile_image" name="profile_image" accept="image/*"><br>

       <center> <input type="submit" name="submit" value="Submit"></center>
    </form>
</body>
</html>
