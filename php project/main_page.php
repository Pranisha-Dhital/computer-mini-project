<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ysabeau+Infant:ital,wght@1,200&display=swap');
        body {
            background-image: linear-gradient(to right, #89a9ff, #a086b0, #7ed08e, #ffffb6);
            font-family: 'Ysabeau Infant', sans-serif;
            margin: 0;
        }

        header {
            text-align: center;
            background-color: #004d40;
            color: #9dbdce;
            padding: 10px;
        }

        h1 {text-align: center;
            font-family: 'Ysabeau Infant', sans-serif;
            font-size: 35px;
            color: #3f0f0f;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin: 0;
            padding: 10px;
            background: linear-gradient(45deg, #341d44, #1d2e44, #3f0f0f);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            font-weight: bolder;
        }

        h2 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            color: #013b32;
            text-align: center;
            margin-top: 20px;
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        label {
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="file"] {
            margin-top: 10px;
            border: 1px solid #341d44;
            color= #e8e195
            padding: 10px;
            font-size: 16px;
            width: 300px;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #004d40;
            color: #efe7c1;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 30px 0;
        }

        img {
            padding: 5px;
            margin-right: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 200px;
            height: 200px;


        }

    </style>
</head>
<body>
<body>
<h1>Welcome!</h1>
<div style="display: flex; justify-content: center;">
    <img src="Explore paradigms.jpg" alt="We are glad to see you here." style="width: 200px; height: auto;">
</div>
<h2>View, Share and Discover Innovative Ideas</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <input type="submit" name="upload" value="Upload">
</form>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "log_in";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// Retrieve image paths from database
$sql = "SELECT picture_path FROM picture WHERE user_id = 1";
$result = mysqli_query($conn, $sql);

// Display images
while($row = mysqli_fetch_assoc($result)) {
echo "<img src='".$row['picture_path']."' width='200'>";
}

mysqli_close($conn);
?>
</body>
</html>
