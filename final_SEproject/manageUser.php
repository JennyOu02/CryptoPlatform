<?php
    session_start();
    include "connectdb.php";
    
    $db = $con;

    if(isset($_POST['removeUser'])) {
        $userName = $_POST['userName'];

        $stmt = $db->prepare("DELETE FROM Users WHERE userName=:userName");
        $stmt->bindParam(':userName', $userName);
        $stmt->execute();
    }

    $query = "SELECT userName, accountType FROM Users";
    $result = $db->query($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin</title>
        <link rel="stylesheet" href="viewList.css">
    </head>

    <body>
        <section class="admin">
            <form method="POST">
                <h1>Admin - manage users</h1>
                
                <div class="member_list" >
                    <table class="admin_board_wrap" id="user-admin">
                      <thead class="admin_boardList">
                        <th class="admin_board_head">Username</th>
                        <th class="admin_board_head">Account Type</th>
                        
                      </thead>
                      <tbody>
                        <?php while($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr class="admin_board_content">
                          <td class="admin_board_content_nm"><a class="user_id"><?php echo $row['userName']; ?></a></td>
                          <td class="admin_board_content_nm"><a class="user_balance"><?php echo $row['accountType']; ?></a></td>
                            <td class="admin_board_content_nm">
                                <input type="hidden" name="userName" value="<?php echo $row['userName']; ?>">
                                <button type="submit" name="removeUser" onclick="return confirm('Are you sure you want to remove this user?')">Remove</button>
                                <!--<button onclick="alert('User Kicked')">Remove</button>-->
                                <!--<button onclick="alert('Password changed')">Change Password</button>-->
                            </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                </div>
            </form>
            <div class="homebtn">
                    <a href="success3.php"><button onclick="location.href='success.html'">Home</button ></a>
            </div>
        </section>
    </body>
</html>