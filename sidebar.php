<div id="sidebar">
    
                <div id="sidebar_toggler"> 
                    <span class="arrow_rotate"  > &#10148 </span>
                </div>
    
                <div id="content" class="">
    
                    <div class="header pl-4 pt-3">
                        <img src="./ressources/img/img_holder_portrait.jpg" alt="">
                        <p class="name m-0"> Super Admin </p>
                        <?php echo $_SESSION['email'] ?>
                    </div>
    
                    <hr class="">

    
                    <a href="./index.php" class="link pl-5">
                        <span class="icon"> <img src="./ressources/illustro/camp.png" alt=""> </span> Retourner a l'accueil
                    </a>

                    <hr>

                    <a href="./list_prof.php" class="link pl-5">
                        <span class="icon"> <img src="./ressources/illustro/camp.png" alt=""> </span> Professeurs
                    </a>
                    
                    <a href="./list_client.php" class="link pl-5">
                        <span class="icon"> <img src="./ressources/illustro/athlete.png" alt=""> </span> Client
                    </a>
    
                    <hr class="">

                    <a href="./parametre.php" class="link pl-5"> <span class="icon"> <img src="./ressources/illustro/veille.png" alt=""> </span> Parametre </a>
                    <a href="./destroy.php" class="link pl-5"> <span class="icon"> <img src="./ressources/illustro/veille.png" alt=""> </span> Deconnexion </a>
                </div>
            </div>