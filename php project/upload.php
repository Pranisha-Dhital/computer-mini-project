<?php
// Connect to database
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "log_in";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if image is uploaded
if(isset($_POST["upload"])) {
    // Get image information
    $image_name = $_FILES["image"]["name"];
    $image_tmp_name = $_FILES["image"]["tmp_name"];
    $image_size = $_FILES["image"]["size"];
    $image_error = $_FILES["image"]["error"];

    // Check if file is uploaded without errors
    if($image_error === 0) {
        // Move file to server
        $image_path = "uploads/".$image_name;
        move_uploaded_file($image_tmp_name, $image_path);

        // Insert image path into database
        $sql = "INSERT INTO picture (user_id, picture_path) VALUES (1, '$image_path')";
        mysqli_query($conn, $sql);

        // Redirect to home page
        header("Location: main_page.php");
        exit();
    } else {
        echo "Error uploading file.";
    }
}

mysqli_close($conn);
?>
