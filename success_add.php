<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    include('./pdo_connect.php');
    
    $name = "";
    if(isset($_GET['prenom'])){
        $name = $_GET['prenom'];
    }

?>
<!DOCTYPE html>
<html lang="en">

    <?php include('./headtag.php') ?>

<body>

    <!-- <div id="header"> -->

    <div id="topbar">
        <p class="text col-11 mx-auto">
            77 356 54 68 / someone@gmail.com
        </p>
    </div>

    <nav class="" id="primary_navbar">

        <div id="nav_content" class="row col-11 mx-auto p-0">

            <div id="bloc_title" class="col-md-4">
                <a href="" class="title"> Mamadou Marie Diop</a>
            </div>
        </div>

    </nav>

    <!-- </div> -->

    <div id="pagebody">
        <div id="success" class="">
            <div class="card_content mt-md-5">
                <img class=" " src="./ressources/illustration/success_add.png" alt="">
                <div class="text">
                    <p class="merci"> Hello, <?php echo($name) ?> !</p>
                    <p class="desc">
                        votre inscription a ete bien tenu en compte, merci bien
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <a href="index.php" class="retour btn mt-4 mb-5"> retouner a la page d'accueil</a>
        </div>
        
        <!-- Footer  = = = = = = = = = = = = = =  = -->

        <!-- <footer class="p-5">
        
            <div id="content" class="row col-sm-11 mx-auto">

                <div class="col-md-3 border-right p-3">
                    <p class="footer_title"> Coordonnés </p>

                    <p class="adress1 m-0 ml-3"> adresse : Villa 25k </p>
                    <p class="adress2 m-0 ml-3"> Dakar - SENEGAL</p>

                    <p class="adress1 m-0 ml-3 mt-3"> tel :  78 176 65 98 </p>
                    <p class="adress2 m-0 ml-3"> mail :  78 176 65 98 </p>
                </div>

                <div class="col-md-3 border-right p-3">
                    <p class="footer_title"> Navigation </p>

                    <a href="#" class="m-0 ml-3 d-block"> accueil </a>
                    <a href="#" class="m-0 ml-3 d-block"> a propos </a>
                    <a href="#" class="m-0 ml-3 d-block"> librairie </a>
                    <a href="#" class="m-0 ml-3 d-block"> service </a>
                    <a href="#" class="m-0 ml-3 d-block"> contact </a>

                </div>

                <div class="col-md-3 border-right p-3">
                    
                </div>
            </div>
        </footer> -->



    </div>


    <?php include('./scripttag.php') ?>
</body>

</html>