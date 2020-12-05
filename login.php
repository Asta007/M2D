<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    include('./pdo_connect.php');
    if(isset($_POST['submit'])){
        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['pass']);
        // echo($email);
        // echo($pass);
        // echo("SELECT * FROM users WHERE email=$email AND password=$pass");
        $query = $pdo->prepare("SELECT * FROM users WHERE email='$email' AND password='$pass'");
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        if($user){
            session_start();
            $_SESSION['email'] = $user['email'];
            $_SESSION['id'] = $user['id'];
            header("location:list_prof.php");
        }
        else{
            $err = "error";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php include('./headtag.php') ?>

<body>
    <div id="loginpage">
        <div class="content">
            <form id="login_form" action="login.php" method="post" class="col-md-4 mx-auto">
                
                <img src="./ressources/img/logo.png" alt="" class="logo">

                <hr>
                
                <div class="form-group">
                    <label for="email"> email</label>
                    <input type="text" name="email" id="email" class="form-control" autofocus>
                </div>

                <div class="form-group">
                    <label for="pass"> password </label>
                    <input type="password" name="pass" id="pass" class="form-control">
                </div>

                <div class="form-group text-center">
                    <button name="submit" class="btn col-11 btn_con mt-2 mb-2"> Connexion </button>
                </div>

                <?php
                    if(isset($err)){
                        ?>
                            <script>
                                var form = document.getElementById("login_form");
                                form.classList.add('shake');
                            </script>

                            <p class="alert alert-danger text-danger"> Indentifiant incorrect </p>
                        <?php
                    }
                ?>
                
                <!-- <a href="./list_prof.php" class="text-danger col-12"> DevModLink | dashboard </a> -->
            </form>
        </div>
    </div>


    <?php include('./scripttag.php') ?>

</body>

</html>