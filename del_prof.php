<?php
    ini_set('display_errors',1);
    include('./pdo_connect.php');
    $id = $_GET['id'];
    echo($id);
    $query = $pdo->query("DELETE FROM prof WHERE id=$id");
    // echo("DELETE FROM prof WHERE id=$id");
    if($query->execute()){
        echo " deleted ";
        header('location:list_prof.php');
    }
    else{
        echo " error ";
    }
?>