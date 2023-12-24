<html>
<head>
</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #b0f3d4;
    }

    form {
        border: 2px solid #ccc;
        padding: 20px;
        width: 400px;
        margin: 0 auto;
        background-color: #efe7c1;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #ccc;
    }

    h1 {
        text-align: center;
        color: #1d2e44;
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #666;
    }

    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        box-sizing: border-box;
        font-size: 16px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }
</style>

<?php
    echo '<h1> Log in here : </h1>'
?>
<form method="post" action="login_process.php">
    <label for="username">ID:</label>
    <input type="text" name="username" id="username">

    <label for="password">Password:</label>
    <input type="password" name="password" id="password">

    <input type="submit" name="login" value="Log in">
</form>
<p>Don't have an account yet? <a href="register.php">Register here</a>.</p>
</body>
</html>
