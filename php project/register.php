<!DOCTYPE html>
<html>
<head>

    <title>Registration Form</title>
    <style>
        body {
            font-family: ' Georgia, serif';
            background-color: #c8e5b1;
            padding: 20px;
        }

        form {
            background-color: #d3cb71;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
            transition: background-color 0.2s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #2E8B57;
        }

        .error {
            color: #f00;
            font-weight: bold;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 36px;
            color: #3f0f0f;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<?php
echo"<h1> Register here:</h1>"
?>


<form method="post" action="register_form_process.php" enctype="multipart/form-data">
    <label for="first-name">First Name:</label>
    <input type="text" name="first_name" id="first-name">

    <label for="last-name">Last Name:</label>
    <input type="text" name="last_name" id="last-name">

    <label for="number-id">Number ID:</label>
    <input type="text" name="number_id" id="number-id">

    <label for="password">Password:</label>
    <input type="password" name="password" id="password">

    <label for="confirm-password">Confirm Password:</label>
    <input type="password" name="confirm_password" id="confirm-password">

    <input type="submit" name="submit" value="Submit">


</form>
<p>Already have an account? <a href="log in.php">Log in here</a>.</p>
</body>
</html>



