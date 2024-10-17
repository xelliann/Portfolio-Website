<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare and execute query to check credentials
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    // If the username and password match, redirect to profile page
    if ($result->num_rows > 0) {
        // Set session or any other login confirmation logic
        $_SESSION['username'] = $user;
        
        // Redirect to profile page
        header("Location: ../website/index.php");
        exit();
    } else {
        // Redirect to registration page if credentials not found
        header("Location: register.html");
        exit();
    }
}

// Close connection
$conn->close();
?>
