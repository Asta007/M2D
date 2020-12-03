<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    include('./pdo_connect.php');

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
    
            <div id="sidebar">
    
                <div id="sidebar_toggler"> 
                    <span class="arrow_rotate"  > &#10148 </span>
                </div>
    
                <div id="content" class="">
    
                    <div class="header pl-4 pt-3">
                        <img src="./ressources/img/img_holder_portrait.jpg" alt="">
                        <p class="name m-0"> Super Admin </p>
                        <p class="email"> superadmin@gmailcom</p>
                    </div>
    
                    <hr class="">

    
                    <a href="./index.php" class="link pl-5">
                        <span class="icon"> <img src="./ressources/illustro/camp.png" alt=""> </span> Retourner a l'accueil
                    </a>

                    <a href="" class="link pl-5">
                        <span class="icon"> <img src="./ressources/illustro/camp.png" alt=""> </span> Professeurs
                    </a>
                    
                    <a href="" class="link pl-5">
                        <span class="icon"> <img src="./ressources/illustro/athlete.png" alt=""> </span> Client
                    </a>
    
                    <hr class="">

                    <a href="" class="link pl-5"> <span class="icon"> <img src="./ressources/illustro/veille.png" alt=""> </span> Parametre </a>
                    <a href="" class="link pl-5"> <span class="icon"> <img src="./ressources/illustro/veille.png" alt=""> </span> Deconnexion </a>
                </div>
            </div>
    
            
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
                                        <td> <?php echo $one_prof['nom']; ?> </td>
                                        <td> <?php echo $one_prof['prenom']; ?> </td>
                                        <td> <?php echo $one_prof['cni']; ?> </td>
                                        <td> <?php echo $one_prof['adress']; ?> </td>
                                        <td> <?php echo $one_prof['tel']; ?> </td>
                                        <td>
                                            <button class="btn btn-primary"> afficher </button>
                                            <button class="btn btn-outline-primary" onclick="return confirm('etes vous supprimer de vouloir supprimer cet element')"> supprimer </button>
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

        <?php include('./headtag.php') ?>
</body>

</html>