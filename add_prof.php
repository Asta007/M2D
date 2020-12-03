<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    include('./pdo_connect.php');

    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $cni = $_POST['cni'];
        $tel = $_POST['telephone'];
        $adress = $_POST['adress'];
        $niveau = $_POST['niveau'];
        $matiere = $_POST['matiere'];
        $tarif = $_POST['tarif'];

        // $query="INSERT INTO prof VALUES('' , $nom ,$prenom ,$cni ,$adress ,$tel ,$matiere ,$niveau ,$tarif)";
        $sql = $pdo->prepare("INSERT INTO prof (nom, prenom, cni, adress, tel, matiere, niveau_detude, tarif_horaire) VALUES('$nom' ,'$prenom' ,'$cni' ,'$adress' ,'$tel' ,'$matiere' ,'$niveau' ,'$tarif')");
        if($sql->execute()){
            ?>
            <script>
                alert("Inscription bien pris en compte");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("une erreur eun survenu l'ors de l'insertion");
            </script>
            <?php
        }
        // $sql->execute();
    }
    else{
    }
?>

<!DOCTYPE html>
<html lang="en">

    <?php include('./headtag.php') ?>

<body>

    <!-- <div id="header"> -->

    <!-- <div id="topbar">
        <p class="text col-11 mx-auto">
            77 356 54 68 / someone@gmail.com
        </p>
    </div> -->

    <nav class="" id="primary_navbar">

        <div id="nav_content" class="row col-11 mx-auto p-0">

            <div id="bloc_title" class="col-md-4">
                <a href="" class="title"> Mamadou Marie Diop</a>
            </div>

            <div id="bloc_links" class=" col-md-8 text-md-right">

                <div class="dropdown show">
                    <button href="" id="servicedrop" class="link btn btn-link dropdown-toggle" data-toggle="dropdown" type="button"> services </button>
                    <div class="dropdown-menu" aria-labelledby="servicedrop">
                        <a href="#domicile" class="dropdown-item mr-lg-4 mr-md-3 link"> cours a domicile </a>
                        <a href="#langue" class="dropdown-item mr-lg-4 mr-md-3 link"> cours de langue </a>
                        <a href="#inter" class="dropdown-item mr-lg-4 mr-md-3 link"> interpretariat / Traduction </a>
                        <a href="#lib" class="dropdown-item mr-lg-4 mr-md-3 link"> librairie </a>
                        
                    </div>
                </div>
                <a href="#" class="mr-lg-4 mr-md-3 link"> a propos </a>
                <a href="#sec_rejoindre" class="mr-lg-4 mr-md-3 link"> contacts </a>
                <a id="con_btn" href="./login.php" class="mr-lg-4 mr-md-3 link"> connexion </a>
            </div>

        </div>

    </nav>

   <div id="add_prof">
       <div class="row content mt-5 col-md-8 mx-auto">

            <div id="form_side" class="col-7 p-3">
                <form action="add_prof.php" method="POST" class="p-4">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="nom"> Nom </label>
                            <input type="text" id="nom" class="form-control" name="nom">
                        </div>
                        <div class="form-group col-6">
                            <label for="prenom"> prenom </label>
                            <input type="text" id="prenom" class="form-control" name="prenom">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="cni"> Cni </label>
                            <input type="number" id="cni" class="form-control" name="cni">
                        </div>
                        <div class="form-group col-6">
                            <label for="telephone"> telephone </label>
                            <input type="number" id="telephone" class="form-control" name="telephone">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="adress"> adress </label>
                            <input type="text" id="adress" class="form-control" name="adress">
                        </div>
                        <div class="form-group col-6">
                            <label for="niveau"> niveau d'etude </label>
                            <input type="text" id="niveau" class="form-control" name="niveau">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="matiere"> matiere </label>
                        <input type="text" id="matiere" class="form-control" name="matiere">
                    </div>

                    <div class="form-group">
                        <label for="tarif"> tarif horaire (en CFA) </label>
                        <input type="number" id="tarif" class="form-control" name="tarif">
                    </div>

                    <div class="form-group align-center text-center">
                        <button class="btn sub_btn btn-success col-11 mt-3" name="submit">  Je m'inscrits </button>
                    </div>

                </form>
            </div>

            <div id="text_side" class="col-5 p-4 mt-5">
                <p class="big_title">
                    S'inscrire sur la plateforme en tant que professeur
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi ea, modi ratione doloremque doloribus ipsa eveniet dicta, nesciunt iure itaque maxime natus cumque magnam illum mollitia. Tenetur quis nisi enim?
                    Lorem ipsum dolor, sitt amet consectetur adipisicing elit. Eligendi ea, modi ratione doloremque doloribus ipsa eveniet dicta, nesciunt iure itaque maxime natus cumque magnam illum mollitia. Tenetur quis nisi enim?
                </p>
            </div>
       </div>
   </div>


    <?php include('./headtag.php') ?>
</body>

</html>