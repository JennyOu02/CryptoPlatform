<?php
include "signupProcess.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="signup">
        <form name="signUpForm" method="POST">
            <h1>Admin - please sign up for users</h1>
           
            <div class="int"> 
                <input type="text" name="userName" id="userName"
                autocomplete="off" required>
                <label for="userName">USERNAME</label>
            </div>
            <div class="int"> 
                <input type="password" name="pwd" id="signUpPassword"
                autocomplete="off" required>
                <label for="signUpPassword">PASSWORD</label>
            </div>
        
            <div class="radiobtn">
                <input type="radio" id="student" name="accountType" value="student">
                <label for="student">Student</label><br>
                <input type="radio" id="professor" name="accountType" value="professor">
                <label for="professor">Professor</label><br>
                <input type="radio" id="admin" name="accountType" value="admin">
                <label for="admin">Admin</label>
            </div>
            
            <div class="btn">
                <button type="submit" name="submit" id="signUpButton">SIGN UP</button>
            </div>
        </form>
    </section>
</body>
</html>
