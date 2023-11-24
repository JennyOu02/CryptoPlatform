// <?php

// session_start();
// include "connectdb.php";

// $db = $con;

// if(isset($_POST['addCredit'])) {
//     $amount = $_POST['amount'];
//     $userName = $_POST['userName'];

//     $stmt = $db->prepare("INSERT INTO Orders (orderId, directionType, price, quantity, crypto, userName) VALUES (null, 1, :amount, null, null, :userName)");
//     $stmt->bindParam(':amount', $amount);
//     $stmt->bindParam(':userName', $userName);
//     $stmt->execute();

//     if($stmt->rowCount() == 1) {
//         $orderId = $db->lastInsertId();
//         $msg = insert_data($db, "Orders", $amount, $userName, $orderId);
//         if($msg == "Success") {
//             header("Location: success.html");
//             exit();
//         } else {
//             echo $msg;
//         }
//     } else {
//         // echo "Error adding credits";
//     }
// }

// function insert_data($db, $tableName, $amount, $userName, $orderId) {
//     $msg = '';
//     if(empty($db)) {
//         $msg = "Database connection error";
//     } else {
//         $query = "INSERT INTO $tableName(`orderId`, `directionType`, `price`, `quantity`, `crypto`, `userName`) VALUES (null, 1, $amount, null, 'credits', '$userName', $orderId)";
//         $result = $db->query($query);

//         if($result) { 
//             $msg = "Success";
//         } else {
//             $msg = $db->errorInfo();
//         }
//     }
//     return $msg;
// }


// ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>professor</title>
        <link rel="stylesheet" href="viewList.css">
    </head>

    <body>
        <section class="professor">
            <form method="POST">
                <h1>Professor - giving out credits to students</h1>
                
                <div class="member_list">
                    <table class="admin_board_wrap" id="user-admin">
                      <thead class="admin_boardList">
                        <th class="admin_board_head">User Name</th>
                        <th class="admin_board_head">Add Balance</th>
                      </thead>
                      <tbody>
                          <?php
                            include "connectdb.php";
                            $db = $con;
                            $query = "SELECT userName FROM Users WHERE accountType = 'student'";
                            $result = $db->query($query);
                            if ($result->rowCount() > 0) {
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr class='admin_board_content'>";
                                    echo "<td class='admin_board_content_nm'>" . $row['userName'] . "</td>";
                                    echo "<td class='admin_board_content_nm'>";
                                    echo "<input type='hidden' name='userName' value='" . $row['userName'] . "'>";
                                    echo "<label>Enter $ amount to add:</label>";
                                    echo "<input type='number' name='amount' min='0' step='0.01' id='amount' placeholder='Input amount to add'>";
                                    echo "<button type='submit' name='addCredit'>ADD</button>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            }
                        ?>
                      </tbody>
                    </table>
                </div>
            </form>
            <div class="homebtn">
                  <button onclick="location.href='success2.php'">Home</button >
                </div>
        </section>
    </body>
</html>