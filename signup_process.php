<?php
// Connect to your database. Replace these values with your actual database credentials.
$servername = "localhost";
$username = "workoutapp";
$password = "focusfitness";
$dbname = "workout_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$gender = $_POST['gender'];

// Prepare SQL statement to insert data into database
$stmt = $conn->prepare("INSERT INTO users (username, email, password, age, weight, height, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $username, $email, $password, $age, $weight, $height, $gender);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error; // Changed $sql to $stmt
}

$stmt->close();
$conn->close();
?>
