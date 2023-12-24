<?php
// Database credentials
$host = '127.0.0.1';
$username = "root";
$password = "";
$database = "register";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$number_id = $_POST['number_id'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if passwords match
if ($password !== $confirm_password) {
    die("Error: Passwords do not match");
}

// Hash password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into database
$sql = "INSERT INTO register_info (first_name, last_name, number_id, password) VALUES ('$first_name', '$last_name', '$number_id', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: main_page.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
