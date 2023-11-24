<?php
include "loginProcess.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="login">
        <form method="POST" action="">
            <h1>Log in</h1>
            <div class="int"> 
                <input type="text" name="userName" id="signInUser"
                autocomplete="off" required>
                <label for="signInUser">USER NAME</label>
            </div>
            <div class="int"> 
                <input type="password" name="pwd" id="signInPassword"      
                autocomplete="off" required>
                <label for="signInPassword">PASSWORD</label>
            </div>
            <div class="btn">
                <button type="submit" name="submit" id="signInButton">LOGIN</button>
            </div>
            <div id="error-message"></div>

        </form>
        <!--<div class="caption">-->
        <!--    <a href="signup.html">Make a new account?</a>-->
        <!--</div>-->
    </section>
</body>
</html>
