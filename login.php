<?php include('./pdo_connect.php') ?>

<!DOCTYPE html>
<html lang="en">
<?php include('./headtag.php') ?>

<body>
    <div id="loginpage">
        <div class="content">
            <form action="#" method="post" class="col-md-4 mx-auto">
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
                    <button class="btn col-11 btn_con mt-2 mb-2"> Connexion </button>
                </div>
                <a href="./list_prof.php" class="text-danger col-12"> DevModLink | dashboard </a>
            </form>
        </div>
    </div>


    <?php include('./headtag.php') ?>

</body>

</html>