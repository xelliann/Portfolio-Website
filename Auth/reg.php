<?php
if (isset($_POST['register'])) {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "portfolio");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement, omit id from the insert statement
    $stmt = $conn->prepare("INSERT INTO users (name, username, password, email, title, City, address, description, degree_details, skills, interests, testimonials, experience, services, projects, info, twitter, facebook, instagram, youtube, linkedin, github, birthday, age, website, degree, phone, freelancer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssssssssssssssssssssssssss", 
        $name, $username, $password, $email, $title, $city, 
        $address, $description, $degree_details, $skills, 
        $interests, $testimonials, $experience, $services, 
        $projects, $info, $twitter, $facebook, $instagram, 
        $youtube, $linkedin, $github, $birthday, 
        $age, $website, $degree, $phone, $freelancer
    );

    // Set parameters and execute
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $email = $_POST['email'];
    $title = $_POST['title'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $degree_details = $_POST['degree_details'];
    $skills = $_POST['skills'];
    $interests = $_POST['interests'];
    $testimonials = $_POST['testimonials'];
    $experience = $_POST['experience'];
    $services = $_POST['services'];
    $projects = $_POST['projects'];
    $info = NULL; // or some default value
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $youtube = $_POST['youtube'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $birthday = $_POST['birthday'];
    $age = NULL; // or some default value, if you have it
    $website = $_POST['website'];
    $degree = $_POST['degree'];
    $phone = $_POST['phone'];
    $freelancer = $_POST['freelancer'];

    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully";
        // Redirect to login page or other page
        header("Location: index.php");
        exit(); // Add exit after header redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
