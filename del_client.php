<?php
    ini_set('display_errors',1);
    include('./pdo_connect.php');
    $id = $_GET['id'];
    echo($id);
    $query = $pdo->query("DELETE FROM client WHERE id=$id");
    // echo("DELETE FROM prof WHERE id=$id");
    if($query->execute()){
        echo " deleted ";
        header('location:list_client.php');
    }
    else{
        echo " error ";
    }
?>