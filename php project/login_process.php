<?php
// Database credentials
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'log_in';

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the user data submitted by the form
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL query to insert the new user into the database
$sql = "INSERT INTO log_in_info (Username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: main_page.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();
?>
