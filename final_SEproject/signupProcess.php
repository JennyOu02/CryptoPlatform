
<?php
include "connectdb.php";
// session_start();

if(isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $pwd = $_POST['pwd'];
    $accountType = $_POST['accountType'];

    // Check if username already exists
    $stmt = $con->prepare("SELECT * FROM Users WHERE userName = ?");
    $stmt->execute([$userName]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        echo "<script>alert('Username already exists. Please choose a different username.')</script>";
    } else {
        // Insert new user into database
        $stmt = $con->prepare("INSERT INTO Users (userName, password, accountType) VALUES (?, ?, ?)");
        $stmt->execute([$userName, $pwd, $accountType]);

        echo "<script>alert('User added successfully.')</script>";
    }
}

?>