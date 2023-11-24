<?php
include "connectdb.php";
session_start();

if(isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $pwd = $_POST['pwd'];

    $stmt = $con->prepare("SELECT * FROM Users WHERE userName = ? AND password = ?");
    $stmt->execute([$userName, $pwd]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $_SESSION['userName'] = $row['userName'];
        $accountType = $row['accountType'];
        
        if ($accountType == 'student') {
            header("Location: success.php");
        } else if ($accountType == 'professor') {
            header("Location: success2.php");
        } else if ($accountType == 'admin') {
            header("Location: success3.php");
        } else {
            // handle unknown account types here
        }
        exit();
        
    } else {
        echo "<script>alert('Invalid username or password. Please try again.')</script>";


    }
}
?>