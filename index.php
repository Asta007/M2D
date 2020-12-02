<?php
    echo("php workin")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./ressources/css/animate.css">
    <link rel="stylesheet" href="./ressources/css/bootstrap_v4.css">
    <link rel="stylesheet" href="./ressources/css/global_style.css">
    <link rel="stylesheet" href="./ressources/css/lightbox.css">
    

    <title> M2D </title>
</head>

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
                <a id="con_btn" href="./list_prof.html" class="mr-lg-4 mr-md-3 link"> dashboard </a>
            </div>

        </div>

    </nav>

    <!-- </div> -->

    <div id="pagebody">

        <!-- <div id="jumbotron"></div> -->

        <div id="topslide" class="carousel slide col-11 mx-auto p-0" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./ressources/img/slider_1.jpg" alt="" class="">
                </div>
                <div class="carousel-item">
                    <img src="./ressources/img/slider_2.jpg" alt="" class="">
                </div>
                <div class="carousel-item">
                    <img src="./ressources/img/slider_3.jpg" alt="" class="">
                </div>
                <div class="carousel-item">
                    <img src="./ressources/img/slider_4.jpg" alt="" class="">
                </div>
            </div>

            <!-- <div class="overlay"></div> -->

            <a class="carousel-control-prev" href="#topslide" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#topslide" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Section Présentation = = = = = = = = = = = = = =  = -->

        <section id="sec_presentation" class=" col-lg-8 mx-auto">
            

            <p class="section_title col-md-4 col-sm-5 col-6 pb-2 mb-5"> présentation </p>

            <div class="row">

                <div class="col-4 text-center">
                    <a href="./ressources/img/African-parent-and-child.png" data-lightbox="img1">
                        <img src="./ressources/img/African-parent-and-child.png" alt="" width="100%">
                    </a>
                </div>

                <div class="col-8 text-justify">

                    <p class="question"> Qui somme nous ?</p>
                    <p class="intro_text">
                        M2D cours à domicile est une entreprise spécialisée dans l’enseignement, l’éducation avec le package suivant : Cours à domicile, traduction, interprétariat, et librairie. <br>
                    </p>

                    <p class="question"> Que faisons nous ? </p>
                    <p class="intro_text">
                        M2D  propose aussi des cours de langues pour les particuliers. <br>
                        En partenariat  avec de nombreux professionnels de l’enseignement : agent, professeurs qualifiés avec des années d’expériences.
                    </p>

                </div>

            </div>

        </section>

        <!-- Section Service  = = = = = = = = = = = = = =  = -->

        <section id="sec_serv" class="">
            <p class="section_title col-md-4 col-sm-5 col-6 pb-2 mb-5">
                Nos services
            </p>

            <div id="domicile" class="content row col-lg-9 mx-auto p-0">

                <div class="col-md-8 col-sm-7 p-4">
                    <p class="service_title">
                        Cours a domicile
                    </p>
                    <p class=" text-justify">
                        M2D vous accompagne avec des cours à domicile et de soutien scolaire.
                        Plus de lacune ni d’échec !                        
                    </p>
                    <ul class="list-group-flush ml-2">
                        <li class="list-group-ite">
                            Matières scientifiques : Mathématiques, physique-chimie, svt
                        </li>
                        <li class="list-group-ite">
                            Matières littéraires : Français, HG, Philo
                        </li>
                        </li>
                        <li class="list-group-ite">
                            Informatique, Comptabilité, Technique d’expression et de communication                            
                        </li>
                    </ul>
                    <button class="btn btn_serv"> Je m'inscrit </button>
                </div>

                <div class="col-md-4 col-sm-5 text-sm-left text-center p-0">
                    <img src="./ressources/img/dom.jpg" class="card_side_img" alt="">
                </div>
            </div>

            <div id="langue" class="content row col-lg-9 mx-auto p-0">

                <div class="col-md-8 col-sm-7 p-4">
                    <p class="service_title">
                        Cours de langue
                    </p>
                    <p class=" text-justify">
                        Nous sommes nombreux à avoir des difficultés avec des langues étrangères ou culturelles
                        M2D est la solution avec ses cours de :                                                
                    </p>
                    <ul class="list-group-flush ml-2">
                        <li class="list-group-ite">
                            Francais , Anglais , Espagnole , Arabe
                        </li>
                        <li class="list-group-ite">
                            Coran , Wolof , Pulaar , Serere
                        </li>
                    </ul>

                    <button class="btn btn_serv"> Je m'inscrit </button>
                </div>

                <div class="col-md-4 col-sm-5 text-sm-left text-center p-0">
                    <img src="./ressources/img/onebook.jpg" class="card_side_img" alt="">
                </div>
            </div>

            <div id="inter" class="content row col-lg-9 mx-auto p-0">

                <div class="col-md-8 col-sm-7 p-4">
                    <p class="service_title">
                        Interpretariat & traduction
                    </p>
                    <p class=" text-justify">
                        M2D c’est des services de Traduction pour vos documents avec une traduction professionnelle spécialisée dans plusieurs langues pour aborder les aspects linguistiques, culturels et formels ; et d’Interpretariat pour vos événements, colloques ou séminaires.                      
                    </p>
                    <button class="btn btn_serv"> Je m'inscrit </button>

                </div>


                <div class="col-md-4 col-sm-5 text-sm-left text-center p-0">
                    <img src="./ressources/img/inter.jpg" class="card_side_img" alt="">
                </div>

            </div>

            <div id="lib" class="content row col-lg-9 mx-auto p-0">

                <div class="col-md-8 col-sm-7 p-4">
                    <p class="service_title">
                        Librairie
                    </p>
                    <p class=" text-justify">
                        Toujours dans l’optique de vous satisfaire . M2D vous propose aussi une LIBRAIRIE avec des fournitures scolaire et bureautiques de qualité avec une livraison gratuite.
                        Juste contactez-nous pour une satisfaction complète.
                    </p>

                    <button class="btn btn_serv"> Je m'inscrit </button>
                
                </div>
                
                <div class="col-md-4 col-sm-5 text-sm-left text-center p-0">
                    <img src="./ressources/img/biblio.jpg" class="card_side_img" alt="">
                </div>

            </div>

        </section>

          <!-- Section Paralax  = = = = = = = = = = = = = =  = -->

        <section id="sec_paralax" class="">

            <img id="groupimg" src="./ressources/illustration/4_img.png" alt="">
            <img id="wave_blue" src="./ressources/illustration/paralax.png" alt="">
            
            <div class="content_first">
                <div class="content_last col-md-9 col-sm-11 mx-auto">
                    <p class="text col-lg-4 col-md-6 col-sm-8 p-0 "> Une equipe de qualité pour vos enfant </p>
                    <a href="" class="btn_rejoindre" hidden> Rejoindre l'equipe </a>
                    <p class="desc">
                        ! sous peu il vous sera possible de rejoindre l'equipe
                    </p>
                </div>
            </div>

        </section>

        <!-- Section Articles  = = = = = = = = = = = = = =  = -->

        <section id="sec_articles" class="col-lg-8 mx-auto">
            <p class="section_title col-md-4 col-sm-5 col-6 pb-2 mb-5">
                Quelques Articles
            </p>

            <div class="row">

                <div class="col-md-4 mb-4 col-sm-4 col-6">
                    <a href="./ressources/img/img1.jpg" data-lightbox="articles">
                        <img class="" src="./ressources/img/img1.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-4 mb-4 col-sm-4 col-6">
                    <a href="./ressources/img/img2.jpg" data-lightbox="articles">
                        <img class="" src="./ressources/img/img2.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-4 mb-4 col-sm-4 col-6">
                    <a href="./ressources/img/img3.jpg" data-lightbox="articles">
                        <img class="" src="./ressources/img/img3.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-4 mb-4 col-sm-4 col-6">
                    <a href="./ressources/img/img4.jpg" data-lightbox="articles">
                        <img class="" src="./ressources/img/img4.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-4 mb-4 col-sm-4 col-6">
                    <a href="./ressources/img/img5.jpg" data-lightbox="articles">
                        <img class="" src="./ressources/img/img5.jpg" alt="">
                    </a>
                </div>

                <div class="col-md-4 mb-4 col-sm-4 col-6">
                    <a href="./ressources/img/img6.jpg" data-lightbox="articles">
                        <img class="" src="./ressources/img/img6.jpg" alt="">
                    </a>
                </div>

            </div>

        </section>

        <!-- Section Rejoindre  = = = = = = = = = = = = = =  = -->

        <section id="sec_rejoindre" class="col-lg-8 mx-auto">

            <p class="section_title col-md-4 col-sm-5 col-6 pb-2 mb-5">
                Nous rejoindre
            </p>

            <div class="row">

                <div id="contact_img" class="col-lg-4">
                    <img src="./ressources/illustration/contact_img.png" alt="">
                </div>

                <div id="contact_form" class="col-md-8 col-sm-11">
                    <form action="">
                        <div class="form-group row">

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
                            <label for=""> Email </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for=""> Message </label>
                            <textarea name="" rows="5" class="form-control"> </textarea>

                        </div>
                    </form>
                </div>
            </div>

        </section>

        <!-- Footer  = = = = = = = = = = = = = =  = -->

        <footer class="p-5">
     
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
        </footer>



    </div>



    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
    <script src="./ressources/javascript/jquery_v3.js"></script>
    <script src="./ressources/javascript/popper.js"></script>
    <script src="./ressources/javascript/bootstrap_v4.js"></script>
    <script src="./ressources/javascript/lightbox-plus-jquery.min.js"></script>
    <script src="./ressources/javascript/lightbox.js"></script>

</body>

</html>