
<!DOCTYPE html>
<html>
<head>
    <title>Explore Paradigms</title>
</head>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ysabeau+Infant:ital,wght@1,200&display=swap');
    h1 {

        text-align: center;
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
    h2{
        color: #6e0f0f;
        font-size: 1em;
        text-align: center;
        margin-top: 50px;
    }
    img {
        padding: 20px;
        display: block;
        margin: 0 auto;
        max-width: 100%;
        width: 300px

    }
    button {
        background-color: #d3cb71; /* Green */
        border: none;
        color: #171616;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 10px;
        margin: 4px 2px;
        cursor: pointer;
    }

    body{
        background-image: linear-gradient(to right, #89a9ff, #a086b0, #7ed08e, #ffffb6);
        font-family: 'Ysabeau Infant', sans-serif;

    }
</style>

<?php
    echo "<h1>Welcome to Explore paradigms</h1>";
    echo '<img src="Explore paradigms.jpg" alt="We are glad to see you here.">';

    echo "<h2>To register or to log in click here</h2>";
    echo "<div style='text-align: center;'>";
    echo "<a href='register.php'><button>Register</button></a>";
    echo "<a href='log in.php'><button>Log in</button></a>";
    echo "</div>";
?>



</body>
</html>
