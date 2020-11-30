<?php
session_start();
require_once('../manager/manager.php');
?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Lycée Robert Schuman</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="../images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="../css/materialize.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="../css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

  <section>
      <div class="ed-mob-menu">
          <div class="ed-mob-menu-con">
              <div class="ed-mm-left">
                  <div class="wed-logo">
                    <img style="width:50px;height:50px;" src="main/HTML/images/logo.png" alt="" />

                  </div>
              </div>
              <div class="ed-mm-right">
                  <div class="ed-mm-menu">
                      <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                      <div class="ed-mm-inn">
                          <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                          <h4>Formation</h4>
                          <ul>
                            <li><a href="troisieme-prepa.php">TROISIÈME PRÉPA PRO</a></li>
                            <li><a href="bac-pro-tu.php">BAC PRO TU</a></li>
                            <li><a href="bac-pro-mei.php">BAC PRO MEI</a></li>
                            <li><a href="bac-pro-sn.php">BAC PRO SN</a></li>
                            <li><a href="formation-sst.php">FORMATION SST</a></li>
                            <li><a href="bac-sti2d.php">BAC STI2D</a></li>
                            <li><a href="bts-cprp.php">BTS CPRP</a></li>
                            <li><a href="bts-sio-sisr.php">BTS SIO – OPTION SISR</a></li>
                            <li><a href="bts-sio-slam.php">BTS SIO – OPTION SLAM</a></li>
                          </ul>
                          <h4>Compte</h4>
                          <ul>
                              <li><a href="#!" data-toggle="modal" data-target="#modal1">Connexion</a></li>
                              <li><a href="#!" data-toggle="modal" data-target="#modal2">Inscription</a></li>
                          </ul>
                          <h4>All Pages</h4>
                          <ul>
                              <li><a href="../../../index.php">Accueil</a></li>
                              <li><a href="main/HTML/vue/all-courses.php">Formation</a></li>
                              <li><a href="main/HTML/vue/awards.php">Relation entreprise</a></li>
                              <li><a href="main/HTML/vue/contact-us.php">Contact</a></li>

                          </ul>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">LYCÉE PRIVÉ ET UFA - ROBERT SCHUMAN - Enseignement catholique sous contrat avec l'état</a>
                                </li>
                                <li><a href="#">Tél: 01 48 37 74 26</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Connexion</a>
                                </li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Inscription</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="../../../index.php"><img style="margin-left:60px;width:90px;height:90px;margin-top:-9px;" src="../images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="../../../index.php">Accueil</a>
                                </li>
                                <li class="about-menu">
                                    <a href="all-courses.php" class="mm-arr">Formation</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="main/HTML/vue/admission.php">
                                                            <img src="../images/site/Formation.jpg" alt="">
                                                            <span>Formation</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                      <li><a href="troisieme-prepa.php">TROISIÈME PRÉPA PRO</a></li>
                                                      <li><a href="bac-pro-tu.php">BAC PRO TU</a></li>
                                                      <li><a href="bac-pro-mei.php">BAC PRO MEI</a></li>
                                                      <li><a href="bac-pro-sn.php">BAC PRO SN</a></li>
                                                      <li><a href="formation-sst.php">FORMATION SST</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                      <li><a href="bac-sti2d.php">BAC STI2D</a></li>
                                                      <li><a href="bts-cprp.php">BTS CPRP</a></li>
                                                      <li><a href="bts-sio-sisr.php">BTS SIO – OPTION SISR</a></li>
                                                      <li><a href="bts-sio-slam.php">BTS SIO – OPTION SLAM</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
                                    <a href="awards.php" class="mm-arr">Relation entreprise</a>
                                    <!-- MEGA MENU 1 -->
                                </li>
                                <li><a href="contact-us.php">Contact</a></li>
                                <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                                <li class="cour-menu"/>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">

                                    <div class="sf-list">
                                        <ul>
                                          <li><a href="troisieme-prepa.php">TROISIÈME PRÉPA PRO</a></li>
                                          <li><a href="bac-pro-tu.php">BAC PRO TU</a></li>
                                          <li><a href="bac-pro-mei.php">BAC PRO MEI</a></li>
                                          <li><a href="bac-pro-sn.php">BAC PRO SN</a></li>
                                          <li><a href="formation-sst.php">FORMATION SST</a></li>
                                          <li><a href="bac-sti2d.php">BAC STI2D</a></li>
                                          <li><a href="bts-cprp.php">BTS CPRP</a></li>
                                          <li><a href="bts-sio-sisr.php">BTS SIO – OPTION SISR</a></li>
                                          <li><a href="bts-sio-slam.php">BTS SIO – OPTION SLAM</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->


    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">

                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Offres alternances</h2>
                            <p>Vous trouverez ci dessous de nombreuses offres d'alternances </p>
                        </div>
                    </div>
                    <div class="s18-age-event l-info-pack-days">
                        <ul>
                            <li>


                                    <?php

                                    $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');
                                    $tab_requête = 'SELECT nom FROM evenement';
                                    $red = $bdd->query($tab_requête);
                                    $tableau =  $red->fetchall();

                                  ?>

                                  <?php

                                  $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');
                                  $tab_requête = 'SELECT description FROM evenement';
                                  $red = $bdd->query($tab_requête);
                                  $tab =  $red->fetchall();

                                ?>



                                <?php

                                $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');
                                $tab_requête = 'SELECT duree FROM evenement';
                                $red = $bdd->query($tab_requête);
                                $tab1 =  $red->fetchall();

                                ?>

                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/2.png" alt="">
                                </div>

                                <div class="s17-eve-time">


                                <div class="s17-eve-time-tim">
                                    <?php echo $tab1[0][0] ." mois";?>
                                </div>


<!-- description du nom de l'entreprise de l'offre -->                  <div class="s17-eve-time-msg">
                                        <?php echo $tableau[0][0]; ?>


        <!-- description de l'offre d'alternance -->                              <div class="time-hide time-hide-2">

<?php echo $tab[0][0]; ?>


                                      </div>
</div>
</div>

                                      <a href="#!" class="s17-sprit age-dwarr-btn time-hide-2-btn">
                                      <i class="fa fa-angle-down"></i>
                                      </a>
                                      <a href="#!" class="s17-sprit age-dwarr-btn time-hide-22-btn hb-com">
                                      <i class="fa fa-angle-up"></i>

                                      </a>








                                                            </li>
                            <li>
                                <div class="age-eve-com age-eve-1">
                                    <img src="images/icon/awa/2.png" alt="">
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <?php echo $tab1[1][0] ." mois"; ?>
                                    </div>

                                    <div class="s17-eve-time-msg">
<?php echo $tableau[1][0]; ?>

                                   <div class="time-hide time-hide-2">

<?php echo $tab[1][0]; ?>


                              </div>

                                    </div>
                                </div>

                                                                      <a href="#!" class="s17-sprit age-dwarr-btn time-hide-2-btn">
                                                                      <i class="fa fa-angle-down"></i>
                                                                      </a>
                                                                      <a href="#!" class="s17-sprit age-dwarr-btn time-hide-22-btn hb-com">
                                                                      <i class="fa fa-angle-up"></i>

                                                                      </a>

                            </li>
                            <li>


                              <div class="age-eve-com age-eve-1">
                                  <img src="images/icon/awa/2.png" alt="">
                              </div>
                              <div class="s17-eve-time">
                                  <div class="s17-eve-time-tim">
                                      <?php echo $tab1[2][0] ." mois"; ?>
                                  </div>

                                  <div class="s17-eve-time-msg">
<?php echo $tableau[2][0]; ?>

                                 <div class="time-hide time-hide-2">

<?php echo $tab[2][0]; ?>


                            </div>

                                  </div>
                              </div>

                                                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-2-btn">
                                                                    <i class="fa fa-angle-down"></i>
                                                                    </a>
                                                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-22-btn hb-com">
                                                                    <i class="fa fa-angle-up"></i>

                                                                    </a>


                            </li>
                            <li>


                              <div class="age-eve-com age-eve-1">
                                  <img src="images/icon/awa/2.png" alt="">
                              </div>
                              <div class="s17-eve-time">
                                  <div class="s17-eve-time-tim">
                                      <?php echo $tab1[3][0] ." mois"; ?>
                                  </div>

                                  <div class="s17-eve-time-msg">
<?php echo $tableau[3][0]; ?>

                                 <div class="time-hide time-hide-2">

<?php echo $tab[3][0]; ?>


                            </div>

                                  </div>
                              </div>

                                                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-2-btn">
                                                                    <i class="fa fa-angle-down"></i>
                                                                    </a>
                                                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-22-btn hb-com">
                                                                    <i class="fa fa-angle-up"></i>

                                                                    </a>


                            </li>
                            <li>


                              <div class="age-eve-com age-eve-1">
                                  <img src="images/icon/awa/2.png" alt="">
                              </div>
                              <div class="s17-eve-time">
                                  <div class="s17-eve-time-tim">
                                      <?php echo $tab1[4][0] ." mois"; ?>
                                  </div>

                                  <div class="s17-eve-time-msg">
  <?php echo $tableau[4][0]; ?>

                                 <div class="time-hide time-hide-2">

  <?php echo $tab[4][0]; ?>


                            </div>

                                  </div>
                              </div>

                                                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-2-btn">
                                                                    <i class="fa fa-angle-down"></i>
                                                                    </a>
                                                                    <a href="#!" class="s17-sprit age-dwarr-btn time-hide-22-btn hb-com">
                                                                    <i class="fa fa-angle-up"></i>

                                                                    </a>


                            </li>


                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


    <!--SECTION START-->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-2 bb-img">
                            <img src="images/3.png" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>Vous souhaitez poster une offre d'alternance ?</h4>
                            <p>Veuillez compléter le formulaire suivant afin de d'enregistrer l'offre.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->




    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
  <div class="box-inn-sp admin-form">
                    <div class="inn-title">
                        <h4>Alternance  </h4>

                    </div>
                    <div class="tab-inn">
                        <form action="../traitement/offre-traitement.php" method="POST">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="" class="validate" name="nom" required>
                                    <label class="">Nom de l'entreprise</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">

                                  <input type="text" name="description">
                                    <label class="">Description de l'offre</label>
                                </div>
                            </div>
                            <div class="row">

                                <div class="input-field col s12">
                                    <input type="text" class="validate" value="" name="duree"required>
                                    <label class="">Durée du contract (en mois)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" value="" name="localisation"class="validate">
                                    <label class="">Localisation</label>
                                </div>
                            </div>

        <div class="row">
                                <div class="input-field col s12">
                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style="">
                                      <input type="submit" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- FOOTER -->
    <section class="wed-hom-footer">
        <div class="container">
            <div class="row wed-foot-link">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Formation</h4>
                    <ul>
                      <li><a href="troisieme-prepa.php">TROISIÈME PRÉPA PRO</a></li>
                      <li><a href="bac-pro-tu.php">BAC PRO TU</a></li>
                      <li><a href="bac-pro-mei.php">BAC PRO MEI</a></li>
                      <li><a href="bac-pro-sn.php">BAC PRO SN</a></li>
                      <li><a href="formation-sst.php">FORMATION SST</a></li>
                      <li><a href="bac-sti2d.php">BAC STI2D</a></li>
                      <li><a href="bts-cprp.php">BTS CPRP</a></li>
                      <li><a href="bts-sio-sisr.php">BTS SIO – OPTION SISR</a></li>
                      <li><a href="bts-sio-slam.php">BTS SIO – OPTION SLAM</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Accès</h4>
                    <ul>
                        <p>RER B (Le Bourget) et Bus 133 (Albert Chardavoine)</p>
                        <p>RER B (La Courneuve) et Bus 249 (Albert Chardavoine) </p>
                        <p>Tramway T11: arrêt Dugny-La Courneuve </p>
                    </ul>
                </div>

                    <div class="col-md-4 foot-tc-mar-t-o">
                        <h4>Contact</h4>
                        <p>Adresse : 5 Avenue du Général de Gaulle, 93440 Dugny</p>
                        <p>Téléphone : 01 48 37 74 26</a></p>
                        <p>Email: <a href="#!">administration@lyceerobertschuman.com</a></p>
                    </div>



            </div>
        </div>
    </section>

    <!-- COPY RIGHTS -->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                    <p>Copyrights © 2021 RN53Themes. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
    <section>
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>BONJOUR ! </h1>
                    <p>Vous ne possedez pas de compte? N'hesitez pas sa prend 2 minute </p>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="main/HTML/images/cancel.png" alt="" />
                    </a>
                    <h4>Bonjour ! </h4>
                    <p>Vous ne possedez pas de compte? N'hesitez pas sa prend 2 minute </p>
                      <form action="main/HTML/traitement/connexion-traitement.php" method="POST" class="s12">
                        <div>
                            <div class="input-field s12">
                                <input name="mail" type="text" data-ng-model="name" class="validate">
                                <label>Email</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input name="mdp" type="password" class="validate">
                                <label>Mot de passe</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Souvenir de moi</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Mot de passe oublier</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Crée un nouveau compte </a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Bonjour</h1>
                    <p>Vous ne possedez pas de compte? N'hesitez pas sa prend 2 minute </p>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="main/HTML/images/cancel.png" alt="" />
                    </a>
                    <h4>Crée un nouveau compte </h4>
                    <form action="main/HTML/traitement/inscription-traitement.php" method="POST" class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" name="nom"  data-ng-model="name1" class="validate">
                                <label>nom</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="text" name="prenom"  data-ng-model="name1" class="validate">
                                <label>prenom</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" name="mail" class="validate">
                                <label>Email</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" name="mdp" class="validate">
                                <label>mot de passe</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" name="mdp" class="validate">
                                <label>Confirme le mot de passe </label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Déja membre ? Connexion </a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">

                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="main/HTML/images/cancel.png" alt="" />
                    </a>
                    <h4>Mot de passe oublier </h4>

                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" class="validate">
                                <label>Nom ou mail </label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Déja membre? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Crée un compte </a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!--Import jQuery before materialize.js-->
    <script src="../js/main.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/custom.js"></script>
</body>

</html>
