<?php
    $host = "localhost";
    $dbname = "m2d";
    $username = "root2";
    $pass = "mysql-pass";

    try {
        $connexion = "mysql:host=".$host.";dbname=".$dbname;
        $pdo = new PDO($connexion,$username,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo ("succefully connected");
    } catch (PDOException $e) {
        echo $e;
    }
?>