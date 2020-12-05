<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    include('./pdo_connect.php');

    session_start();
    if(!$_SESSION['email']){
        header('location:index.php');
    }

    $query = $pdo->query('SELECT * FROM client');
    $all_client = $query->fetchAll();

    // $url = ($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
    // if($url = "php/M2D/list_client.php"){
    //     echo('url matched');
    // }
    // else{
    //     echo('not matched');
    // }

?>

<!DOCTYPE html>
<html lang="en">

    <?php include('./headtag.php') ?>

<body>
<body>

    <!-- <div id="header"> -->

        <div id="admin">

            <!-- The Sidebar = = = = = = = = = = = = = = = = = -->
    
            <?php include('./sidebar.php') ?>
            
            <!-- Right Content = = = = = = = = = = = = = = = = = -->
    
            <div id="content_side">

                <div class="col-lg-11 mx-auto mt-5 mb-2 text-center">
                    <p class=" title m-0"> Liste Client </p>
                    <!-- <a class="" href="./add_prof.html"> ajouter un prof </a> -->
                </div>

                <hr class="col-6 mx-auto mt-3">
                
                <div class="col-lg-11 mx-auto mt-5">

                    <table class="table table-border">

                    <tr class="bg-light">
                        <th> Nom</th>
                        <th> Prenom</th>
                        <th> Adresse</th>
                        <th> service </th>
                        <th> Tel. </th>
                        <th> Action </th>
                    </tr>

                    <?php
                        if($all_client != null){
                            foreach ($all_client as $one_client) {
                                ?>
                                    <tr>
                                        <td> <?php echo $one_client['id'] . " - ". $one_client['nom']; ?> </td>
                                        <td> <?php echo $one_client['prenom']; ?> </td>
                                        <td> <?php echo $one_client['adress']; ?> </td>
                                        <td> <?php echo $one_client['telephone']; ?> </td>
                                        <td> <?php echo $one_client['serv']; ?> </td>
                                        <td>
                                            <a href="" class="btn btn-primary"> afficher </a>
                                            <a href="./del_client.php?id='<?php echo $one_client['id'] ?>'" class="btn btn-outline-primary" onclick="return confirm('voulez vous supprimer ce client')"> supprimer </a>
                                        </td>

                                    </tr>
                                <?php
                            }
                        }
                    ?>
  
                    </table>
                </div>
            </div>
        </div>

        <?php include('./scripttag.php') ?>

</body>

</html>