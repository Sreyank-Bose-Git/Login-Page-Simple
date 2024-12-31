<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="LogInPage.php" method="post">
        <label for="username">Username:</label>
        <input type="username" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" name="LogIn" value="Log In">
    </form>
</body>
</html>

<?php

    if(isset($_POST["LogIn"])) {

        if(empty($_POST["username"]) && empty($_POST["password"])) {
            echo"You have missed both password and username.";
        }
        elseif(empty($_POST["username"])) {
            echo"You have missed username.";
        }
        elseif(empty($_POST["password"])) {
            echo"You have missed password.";
        }
        else {
            echo"You have successfully signed in!";
        }
    }
?>