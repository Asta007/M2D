<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    session_start();
    $id = $_SESSION['id'];

    include('./pdo_connect.php');

    if(isset($_POST['modify'])){
        
        $current_input_password = $_POST['current_input_password'];
        $new_input_password = $_POST['new_input_password'];
        $conf_input_password = $_POST['conf_input_password'];

        $query = $pdo->prepare("SELECT * FROM users WHERE id='$id'");
        $query->execute();
        $user = $query->fetchAll();
        $dbpass = $user[0]['password'];

        // echo('db pass : '.$dbpass . '<br>');
        // echo('c input pass pass : '.$current_input_password .'<br>');
        // echo('n input pass : '.$new_input_password . '<br>');

        // ----------------

        if($dbpass == $current_input_password){
            if($new_input_password == $conf_input_password){
                $query1 = $pdo->prepare("UPDATE users SET password='$new_input_password' WHERE id='$id'");
                if($query1->execute()){
                    $err= "0";
                }
                else{
                    $err = '1';
                }
            }
            else{
                $err = '2';
            }
        }
        else{
            $err = '3';
        }
    }

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
                    <p class=" title m-0"> Changer le mot de passe </p>
                    <!-- <a class="" href="./add_prof.html"> ajouter un prof </a> -->
                </div>

                <hr class="col-6 mx-auto mt-3">

                <div class="updatepass_form col-lg-4 col-md-5 col-sm-6 mx-auto p-4 mt-5">
                    <form action="parametre.php" method="POST" class="">
                        
                        <div class="form-group">
                            <label for="current"> actuel mot de passe</label>
                            <input id="current" type="password" class="form-control" name="current_input_password">
                        </div> 

                        <div class="form-group">
                            <label for="new"> nouveau mot de passe </label>
                            <input id="new" type="password" class="form-control" name="new_input_password">
                        </div>
                        
                        <div class="form-group">
                            <label for="conf"> confimer le mot de passe </label>
                            <input id="conf" type="password" class="form-control" name="conf_input_password">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success col-12 mt-3" name="modify"> modifier </button>
                        </div>

                        <?php
                            if(isset($err)){
                                if($err == "0"){
                                    ?> <p id="err_alert" class="alert alert-success text-center"> votre mot de pass a éte modifier avec succes </p> <?php 
                                }
                                elseif($err == "1"){
                                    ?> <p id="err_alert" class="alert alert-danger text-center"> un probleme est survenu l'ors de la modification  </p> <?php
                                }
                                elseif($err == "2"){
                                    ?> <p id="err_alert" class="alert alert-danger text-center"> vos deux mot de pass de concorde pas </p> <?php
                                }
                                else{
                                    ?> <p id="err_alert" class="alert alert-danger text-center"> mot de pass incorrect </p> <?php
                                }

                                ?>
                                    <script>
                                        var par = document.getElementById('err_alert');
                                        par.classList.add('shake');
                                    </script>
                                <?php
                            }
                        ?>       

                    </form>
                </div>
            </div>
        </div>

        <?php include('./scripttag.php') ?>

</body>

</html>