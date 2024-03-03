<?php
include("regcon.php");

if(isset($_POST['Submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $pnum = $_POST['pnum'];
    $pass =$_POST['pass'];// Hash the password

    // Assuming 'reg' is your table name and you have columns named 'fname', 'lname', 'dob', 'email', 'pnum', and 'pass'
    $ins = "INSERT INTO reg (fname, lname, dob, email, pnum, pass) VALUES ('$fname', '$lname', '$dob', '$email', '$pnum', '$pass')";
    
    $data = mysqli_query($conn, $ins);
    if($data){
        //echo "Data inserted successfully!";
    } else {
        echo "Failed to insert data";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
      body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f1f1f1;
        font-family: Arial, sans-serif;
      }
      .wrapper {
        max-width: 430px;
        width: 100%;
        background: #fff;
        padding: 34px;
        border-radius: 6px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      }
      .wrapper h2 {
        font-size: 22px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
      }
      .input-box {
        margin-bottom: 20px;
      }
      .input-box input {
        height: 40px;
        width: 100%;
        outline: none;
        padding: 0 15px;
        font-size: 17px;
        font-weight: 400;
        color: #333;
        border: 1.5px solid #C7BEBE;
        border-radius: 5rem;
        transition: all 0.3s ease;
      }
      .input-box input:focus,
      .input-box input:valid {
        border-color: #4070f4;
      }
      .input-box.button input {
        color: #fff;
        text-align: center;
        letter-spacing: 1px;
        border: none;
        background: #4070f4;
        cursor: pointer;
        border-radius: 2rem;
      }
      .input-box.button input:hover {
        background: #0e4bf1;
      }
      .text h3 {
        color: #333;
        width: 100%;
        text-align: center;
      }
      .text h3 a {
        color: #4070f4;
        text-decoration: none;
      }
      .text h3 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <h2>Registration</h2>
      <form action="" method="POST" >
        <div class="input-box">
          <input type="text" placeholder="Enter your First name" name="fname" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your Last name" name="lname" required>
        </div>
        <div class="input-box">
          <input type="date" placeholder="Enter your Date Of Birth" name="dob" required>
        </div>
        <div class="input-box">
          <input type="email" placeholder="Enter your E-mail" name="email" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your Phone Number" name="pnum" required>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Create your password" name="pass" required>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Confirm your password" name="pass_confirm" required>
        </div>
        <div class="input-box button">
          <input type="submit" value="Next" name="Submit">
        </div>
        <div class="text">
          <h3>Already have an account? <a href="http://localhost/portfolio/login.html">Login now</a></h3>
        </div>
      </form>
    </div>
  </body>
</html>
