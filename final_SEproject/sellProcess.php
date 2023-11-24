<?php
session_start();
include "connectdb.php";

$db = $con;

if(isset($_POST['confirmBuy'])) {
    $crypto = $_POST['crypto'];
    $amount = $_POST['amount'];
    $userName = $_SESSION['userName'];

    $msg = insert_and_fetch_data($db, "Orders", ["*"], $crypto, $amount);

    if(is_array($msg)) {
        $_SESSION['order'] = $msg[0];
        header("Location: wallet.php");
        exit();
    } else {
        echo $msg;
    }
}

function insert_and_fetch_data($db, $tableName, $columns, $crypto, $amount) {
    $msg = '';
    if(empty($db)) {
        $msg = "Database connection error";
    } else {
        $userName = $_SESSION['userName'];
        $query = "INSERT INTO `Orders`(`orderId`, `directionType`, `price`, `quantity`, `crypto`, `userName`) VALUES (null, 1, null, $amount, '$crypto', '$userName')";
        $result = $db->query($query);

        if($result) { 
            $lastInsertId = $db->lastInsertId();
            $columnName = implode(", ", $columns);
            $query = "SELECT ".$columnName." FROM $tableName"."  WHERE `orderId` = $lastInsertId";
            $result = $db->query($query);

            if($result->rowCount() > 0) { 
                $row = $result->fetch(PDO::FETCH_ASSOC);
                $msg = [$row];
            } else {
                $msg = "No data found"; 
            }
        } else {
            $msg = $db->errorInfo();
        }
    }
    return $msg;
}