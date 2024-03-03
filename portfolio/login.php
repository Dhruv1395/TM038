<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if (empty($email) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        // Database connection details
        $servername = "localhost";
        $username = "root"; // Your database username
        $password_db = ""; // Your database password
        $dbname = "registration"; // Your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password_db, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to query the database for the user with the provided email
        $sql = "SELECT * FROM reg WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['pass'])) {
                $_SESSION['email'] = $email;
                header("Location: myprofile.html");
                exit();
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "User not found.";
        }

        $stmt->close();
        $conn->close();
    }
}
?>
