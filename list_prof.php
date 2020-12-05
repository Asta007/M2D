<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    include('./pdo_connect.php');

    session_start();
    if(!$_SESSION['email']){
        header('location:index.php');
    }

    $query = $pdo->query('SELECT * FROM prof');
    $all_prof = $query->fetchAll();

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
                    <p class=" title m-0"> Liste Proffesseur </p>
                    <!-- <a class="" href="./add_prof.html"> ajouter un prof </a> -->
                </div>

                <hr class="col-6 mx-auto mt-3">
                
                <div class="col-lg-11 mx-auto mt-5">

                    <table class="table table-border">

                    <tr class="bg-light">
                        <th> Nom</th>
                        <th> Prenom</th>
                        <th> Cni</th>
                        <th> Adresse</th>
                        <th> Tel. </th>
                        <th> Action </th>
                    </tr>

                    <?php
                        if($all_prof != null){
                            foreach ($all_prof as $one_prof) {
                                ?>
                                    <tr>
                                        <td> <?php echo $one_prof['id'] . " - ". $one_prof['nom']; ?> </td>
                                        <td> <?php echo $one_prof['prenom']; ?> </td>
                                        <td> <?php echo $one_prof['cni']; ?> </td>
                                        <td> <?php echo $one_prof['adress']; ?> </td>
                                        <td> <?php echo $one_prof['tel']; ?> </td>
                                        <td>
                                            <a href="" class="btn btn-primary"> afficher </a>
                                            <a href="./del_prof.php?id='<?php echo $one_prof['id'] ?>'" class="btn btn-outline-primary" onclick="return confirm('etes vous supprimer de vouloir supprimer cet element')"> supprimer </a>
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