<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    include('./pdo_connect.php');

    $all_serv = ['cour a domicile','cour de langue','interpretariat et traduction','librairie'];
    if(isset($_GET['serv'])){
        $chosen_serv = $_GET['serv'];
    }

    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $tel = $_POST['telephone'];
        $adress = $_POST['adress'];
        $service = $_POST['serv'];

        // $query="INSERT INTO prof VALUES('' , $nom ,$prenom ,$cni ,$adress ,$tel ,$matiere ,$niveau ,$tarif)";
        $sql = $pdo->prepare("INSERT INTO client (nom, prenom, adress, telephone, serv) VALUES('$nom' ,'$prenom' ,'$adress' ,'$tel','$service')");
        if($sql->execute()){
            header("location:success_add.php?prenom=$prenom");
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

    <nav class="" id="primary_navbar">

        <div id="nav_content" class="row col-11 mx-auto p-0">

            <div id="bloc_title" class="col-md-4">
                <a href="index.php" class="title"> Mamadou Marie Diop</a>
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

   <div id="add_client">
       <div class="row content mt-5 col-md-8 mx-auto">
           
            <div id="text_side" class="col-6 p-4 mt-5">
                <p class="big_title">
                    Je m'inscrit en tant qu'eleve
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi ea, modi ratione doloremque doloribus ipsa eveniet dicta, nesciunt iure itaque maxime natus cumque magnam illum mollitia. Tenetur quis nisi enim?
                    Lorem ipsum dolor, sitt amet consectetur adipisicing elit. Eligendi ea, modi ratione doloremque doloribus ipsa eveniet dicta, nesciunt iure itaque maxime natus cumque magnam illum mollitia. Tenetur quis nisi enim?
                </p>
            </div>

            <div id="form_side" class="col-6 p-3">
                <!-- <img id="illustro" src="./ressources/illustration/prof_form.png" alt=""> -->
                <form action="add_client.php" method="POST" class="p-4">
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
                            <label for="adress"> adress </label>
                            <input type="text" id="adress" class="form-control" name="adress">
                        </div>
                        <div class="form-group col-6">
                            <label for="tel"> telephone </label>
                            <input type="number" id="tel" class="form-control" name="telephone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="service"> Service </label>
                        <select name="serv" id="" class="form-control">
                            <option value="<?php echo($chosen_serv) ?>" selected> <?php echo($chosen_serv) ?> </option>
                            <?php
                                foreach($all_serv as $one_serv){
                                    if($one_serv != $chosen_serv){
                                        ?>
                                            <option value="<?php echo($one_serv); ?>"> <?php echo($one_serv); ?>  </option>
                                        <?php
                                    }
                                }
                            ?>
                        </select>
                        
                    </div>

                    <div class="form-group align-center text-center">
                        <button class="btn sub_btn btn-success col-11 mt-3" name="submit">  rejoindre </button>
                    </div>

                </form>
            </div>

            
       </div>
   </div>


    <?php include('./headtag.php') ?>
</body>

</html>