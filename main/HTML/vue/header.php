<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Lycée Robert Schuman</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="main/HTML/images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="main/HTML/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="main/HTML/css/design.css" rel="stylesheet">
    <link href="main/HTML/css/materialize.css" rel="stylesheet">
    <link href="main/HTML/css/bootstrap.css" rel="stylesheet" />
    <link href="main/HTML/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="main/HTML/css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
  </head>
  <body>
    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                      <img style="width:50px;height:50px;" src="/LPRS/main/HTML/images/logo.png" alt="" />

                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>Formation</h4>
                            <ul>
                              <li><a href="/LPRS/main/HTML/vue/troisieme-prepa.php">TROISIÈME PRÉPA PRO</a></li>
                              <li><a href="/LPRS/main/HTML/vue/bac-pro-tu.php">BAC PRO TU</a></li>
                              <li><a href="/LPRS/main/HTML/vue/bac-pro-mei.php">BAC PRO MEI</a></li>
                              <li><a href="/LPRS/main/HTML/vue/bac-pro-sn.php">BAC PRO SN</a></li>
                              <li><a href="/LPRS/main/HTML/vue/formation-sst.php">FORMATION SST</a></li>
                              <li><a href="/LPRS/main/HTML/vue/bac-sti2d.php">BAC STI2D</a></li>
                              <li><a href="/LPRS/main/HTML/vue/bts-cprp.php">BTS CPRP</a></li>
                              <li><a href="/LPRS/main/HTML/vue/bts-sio-sisr.php">BTS SIO – OPTION SISR</a></li>
                              <li><a href="/LPRS/main/HTML/vue/bts-sio-slam.php">BTS SIO – OPTION SLAM</a></li>
                            </ul>
                            <h4>Compte</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Connexion</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Inscription</a></li>
                            </ul>
                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="/LPRS/index.php">Accueil</a></li>
                                <li><a href="/LPRS/main/HTML/vue/all-courses.php">Formation</a></li>
                                <li><a href="/LPRS/main/HTML/vue/awards.php">Evénement</a></li>
                                <li><a href="/LPRS/main/HTML/vue/contact-us.php">Contact</a></li>

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
                                <li><a href="/LPRS/main/HTML/vue/contact-us.php">LYCÉE PRIVÉ ET UFA - ROBERT SCHUMAN - Enseignement catholique sous contrat avec l'état</a>
                                </li>
                                <li><a href="tel://0148377426" class="contact-icon">Téléphone : 01 48 37 74 26</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                              <li><a href="#!" data-toggle="modal" data-target="#modal2">Inscription</a></li>
                                <?php

                                  if (empty($_SESSION))
                                { ?>

                                  <li><a href="#!" data-toggle="modal" data-target="#modal1">Connexion</a></li>
                                <?php }
                                if(isset($_SESSION)){?>
                                    <li><a href="/LPRS/main/HTML/vue/profile.php"><span>Mon compte</span></a></li>
                                    <li><a href="/LPRS/main/HTML/vue/deconnexion.php"><span>Deconnexion</span></a></li>
                              <?php }
                              elseif ($_SESSION ['role'] == 1)
                              {?>
                                <li><a href="/LPRS/main/HTML/vue/admin.php"><span>Mon compte</span></a></li>
                              <?php } ?>
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
                            <a href="/LPRS/index.php"><img style="margin-left:60px;width:90px;height:90px;margin-top:-9px;" src="/LPRS/main/HTML/images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="/LPRS/index.php">Accueil</a>
                                </li>
                                <li class="about-menu">
                                    <a href="/LPRS/main/HTML/vue/all-courses.php" class="mm-arr">Formation</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="/LPRS/main/HTML/vue/admission.php">
                                                            <img src="/LPRS/main/HTML/images/site/Formation.jpg" alt="">
                                                            <span>Formation</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                      <li><a href="/LPRS/main/HTML/vue/troisieme-prepa.php">TROISIÈME PRÉPA PRO</a></li>
                                                      <li><a href="/LPRS/main/HTML/vue/bac-pro-tu.php">BAC PRO TU</a></li>
                                                      <li><a href="/LPRS/main/HTML/vue/bac-pro-mei.php">BAC PRO MEI</a></li>
                                                      <li><a href="/LPRS/main/HTML/vue/bac-pro-sn.php">BAC PRO SN</a></li>
                                                      <li><a href="/LPRS/main/HTML/vue/formation-sst.php">FORMATION SST</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                      <li><a href="/LPRS/main/HTML/vue/bac-sti2d.php">BAC STI2D</a></li>
                                                      <li><a href="/LPRS/main/HTML/vue/bts-cprp.php">BTS CPRP</a></li>
                                                      <li><a href="/LPRS/main/HTML/vue/bts-sio-sisr.php">BTS SIO – OPTION SISR</a></li>
                                                      <li><a href="/LPRS/main/HTML/vue/bts-sio-slam.php">BTS SIO – OPTION SLAM</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
                                    <a href="/LPRS/main/HTML/vue/awards.php" class="mm-arr">Relation entreprise</a>
                                    <!-- MEGA MENU 1 -->
                                </li>
                                <li><a href="/LPRS/main/HTML/vue/contact-us.php">Contact</a></li>
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
        </div>
    </section>
  </body>
</html>
