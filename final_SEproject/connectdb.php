<?php

try{
    $dest = "mysql: dbname = id20586650_secrypto; host = localhost";
    $user = "id20586650_root";
    $pwd = "p[#*wW>5cme<4?63";

    $con= new PDO($dest, $user, $pwd);

    $con ->query("USE id20586650_secrypto");
}
catch(PDOException $e){
    die("Error Connetion: ".$e->getMessage());
}

?>