<?php

 require('../manager/manager.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>lycée Robert Schuman</title>
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

<?php include('header.php'); ?>
    <!--END HEADER SECTION-->


    <!--SECTION START-->
    <section>

        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="db-profile.php" class="">Mon profils</a></li>
                        <?php
                        if($_SESSION['role'] == 1) {
                          ?>
                          <li><a href="/LPRS/main/HTML/vue/dashboard.php"><span>Admin</span></a></li>
                          <?php
                            }
                          ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-9">
                    <div class="udb">
                            <div class="sdb-tabl-com sdb-pro-table">
                                <table class="responsive-table bordered">
                                    <tbody>
                                      <h5 class="card-title">Mon Compte</h5>
                    <div class="text">
                    <p class="card-text"><div class="nom">
                    <?php
                    $a = new Manager();
                    $c = $a->afficheUser($_SESSION['id']);

                    //echo $value;
                    echo 'Votre nom :'.' '.$c['nom']; ?>

                </div>
                <div class="prenom">
                    <?php echo 'Votre prénom :'.' '.$c['prenom']; ?>

                </div>


                <div class="login">
                    <?php echo 'Votre mail :'.' '.$c['mail']; ?>

                </div>
                <div class="mdp">
                    <?php echo 'Votre MDP crypté :'.' '.$c['mdp']; ?>

                </div></p>
                </div>
                </div>
                </div>
            </div>
                                    </tbody>
                                </table>
                                <div class="sdb-bot-edit">
                                    <a href="db-profile-bis.php" ><i class="fa fa-pencil"></i> Modifier son profils</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->



    <!--SECTION END-->

    <!--HEADER SECTION-->
    <section class="wed-hom-footer">
        <div class="container">
            <!--<div class="row">
				<div class="col-md-12">
				<h4>About Wedding Planner</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
				<p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				<p></p>
			  </div>
			  </div>-->
        <!-- FOOTER -->
        <section class="wed-hom-footer">
            <div class="container">
                <!--<div class="row">
            <div class="col-md-12">
            <h4>About Wedding Planner</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
            <p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            <p></p>
            </div>
            </div>-->
                <div class="row wed-foot-link">
                    <div class="col-md-4 foot-tc-mar-t-o">
                        <h4>Formation</h4>
                        <ul>
                          <li><a href="main/HTML/vue/all-courses.php">TROISIÈME PRÉPA PRO</a></li>
                          <li><a href="main/HTML/vue/all-courses.php">BAC PRO TU</a></li>
                          <li><a href="main/HTML/vue/all-courses.php">BAC PRO MEI</a></li>
                          <li><a href="main/HTML/vue/admission.php">BAC PRO SN</a></li>
                          <li><a href="main/HTML/vue/awards.php">FORMATION SST</a></li>
                          <li><a href="main/HTML/vue/dashboard.php">BAC STI2D</a></li>
                          <li><a href="main/HTML/vue/db-courses.php">BTS CPRP</a></li>
                          <li><a href="main/HTML/vue/db-exams.php">BTS SIO – OPTION SISR</a></li>
                          <li><a href="main/HTML/vue/db-profile.php">BTS SIO – OPTION SLAM</a></li>
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
                    <div class="row wed-foot-link-1">
                        <div class="col-md-4 foot-tc-mar-t-o">
                            <h4>Contact</h4>
                            <p>Adresse : 5 Avenue du Général de Gaulle, 93440 Dugny</p>
                            <p>Téléphone : 01 48 37 74 26</a></p>
                            <p>Email: <a href="#!">administration@lyceerobertschuman.com</a></p>
                        </div>


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
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Login</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Create an Account</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate">
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Confirm password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... </h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Forgot password</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" class="validate">
                                <label>User name or email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
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
