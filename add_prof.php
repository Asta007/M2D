<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./ressources/css/animate.css">
    <link rel="stylesheet" href="./ressources/css/bootstrap_v4.css">
    <link rel="stylesheet" href="./ressources/css/lightbox.css">
    <link rel="stylesheet" href="./ressources/css/global_style.css">
    <link rel="stylesheet" href="./ressources/css/admin.css">
    

    <title> Listing Prof </title>
</head>

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
                    <p class=" title m-0"> Ajout Proffesseur </p>
                    <!-- <a class="" href="./list_prof.html"> Retourner a la liste </a> -->
                </div>

                <hr class="col-6 mx-auto mt-3">

                <div class="col-lg-11 mx-auto mt-3">
                    <form action="" class="col-lg-6 mx-auto">
                        <div class="row form-group">

                            <div class="col-6">
                                <label for=""> Nom </label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-6">
                                <label for=""> Prenom </label>
                                <input type="text" class="form-control">
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label for=""> Cni </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="row form-group">

                            <div class="col-6">
                                <label for=""> Telephone </label>
                                <input type="number" class="form-control">
                            </div>

                            <div class="col-6">
                                <label for=""> Adresse </label>
                                <input type="text" class="form-control">
                            </div>
                            
                        </div>

                        <div class="row form-group">

                            <div class="col-6">
                                <label for=""> Niveau d'étude </label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-6">
                                <label for=""> Matiere </label>
                                <input type="text" class="form-control">
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label for=""> Tarif Horaire </label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
    <script src="./ressources/javascript/jquery_v3.js"></script>
    <script src="./ressources/javascript/popper.js"></script>
    <script src="./ressources/javascript/bootstrap_v4.js"></script>
    <script src="./ressources/javascript/lightbox-plus-jquery.min.js"></script>
    <script src="./ressources/javascript/lightbox.js"></script>
    <script src="./ressources/javascript/myscript.js"></script>

</body>

</html>