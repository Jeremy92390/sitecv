<!DOCTYPE html>
<?php require 'connexion/connexion.php' ?>
<?php 
$sql = $pdoCV -> query("SELECT * FROM utilisateur");
$utilisateur = $sql -> fetch();

$sql = $pdoCV -> query("SELECT * FROM t_competences");
$t_competences = $sql -> fetchAll();    

$sql = $pdoCV -> query("SELECT * FROM t_experiences");
$t_experiences = $sql -> fetchAll();

$sql = $pdoCV -> query("SELECT * FROM t_formation");
$t_formation = $sql -> fetchAll();

$sql = $pdoCV -> query("SELECT * FROM t_loisirs");
$t_loisirs = $sql -> fetchAll();

$sql = $pdoCV -> query("SELECT * FROM t_portfolio");
$t_portfolio = $sql -> fetchAll();

$sql = $pdoCV -> query("SELECT * FROM t_realisations");
$t_realisations = $sql -> fetchAll();

$sql = $pdoCV -> query("SELECT * FROM t_titre");
$t_titre = $sql -> fetchAll();

   /* print_r($utilisateur);
    print_r($t_competences);
    print_r($t_experiences);
    print_r($t_formation);
    print_r($t_loisirs);
    print_r($t_realisations);
    print_r($t_titre);*/

    ?>
    <html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Jérémy Telga CV</title>

        <!-- Bootstrap Core CSS -->
        <link href="front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        

        <!-- Theme CSS -->
        <link href="front/css/freelancer.min.css" rel="stylesheet">
        <link rel="stylesheet" href="front/css/style.css">

        <!-- Custom Fonts -->
        <link href="front/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet"> 

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><?php echo $utilisateur['prenom'] . ' ' . $utilisateur['nom']; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Compétences</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#experiences">Experiences</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">A propos de</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Me contacter</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/red.png">
        <header>
            <?php 
            $sql = $pdoCV -> query("SELECT * FROM utilisateur");
            $utilisateur = $sql -> fetch();
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-text">
                            <span class="name"><?php echo $utilisateur['prenom']. ' ' . $utilisateur['nom']; ?></span>
                            <hr class="star-light1">
                            <span class="skills"><?php echo $t_titre[0]['titre_cv']; ?></span>
                        </div>
                    </div>
                </div>
            </div>    
        </header>
    </div>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Compétences</h2>
                    <hr class="star-light">
                    <span class="skills">
                     <label for="bar">HTML</label>
                     <div class="progress">
                      <div class="progress-bar-danger" role="progressbar"
                      aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:95%">95%
                  </div>
              </div>
              <label for="bar">CSS</label>
              <div class="progress">
                  <div class="progress-bar-danger" role="progressbar"
                  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:70%">70%
              </div>
          </div>
          <label for="bar">PHP</label>
          <div class="progress">
              <div class="progress-bar-danger" role="progressbar"
              aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:65%">65%
          </div>
      </div>
      <label for="bar">Javascript</label>
      <div class="progress">
          <div class="progress-bar-danger" role="progressbar"
          aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:55%">55%
      </div>
  </div>
  <label for="bar">Bootstrap</label>
  <div class="progress">
      <div class="progress-bar-danger" role="progressbar"
      aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:80%">80%
  </div>
</div>
</span>
</div>
</div>
</div>
</section>
<!-- Experiences section -->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/red.png">
 <section id="experiences" class="success">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Expériences</h2>
                <hr class="star-light">
                <span class="skills">
                    <?php $i = 0;
                    while ($i < count($t_experiences)) {
                     if ($i == 0) {}
                         echo '<div class="col-md-3"><p><h3>'. $t_experiences[$i]['titre_e'] . ' </h3></p><hr/><p>' . $t_experiences[$i]['sous_titre_e'] . ' </p><p>' . $t_experiences[$i]['dates_e'] . ' </p><p><b>' .  $t_experiences[$i]['description_e']  . '</b></p></div>';
                     $i++;
                 } 
                 ?>
             </span>
         </div>
     </div>
 </div>
</section>
</div>
<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>A propos de</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <p><?php echo 'Je m\'appelle '. $utilisateur['prenom'] . ' ' . $utilisateur['nom'] . ', ' . 'J\'ai' . ' ' . $utilisateur['age'] . ' ans et je suis ' . ' ' . $t_titre[0]['titre_cv'] . ' .' ;?></p>
            </div>
            <div class="cv-web">
                <div class="button">
                    <a target="_blank" href="img/cv_id.pdf">Télécharger</a>
                    <p class="top">Mon CV print en PDF</p>
                    <p class="bottom">Taille: 22,4 Ko</p>
                </div>
            </div>
            <div class="col-lg-4">
                <p></p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/red.png">
    <section id="contact" class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Me contacter</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <div id="formulaire">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Veuillez entrer votre nom.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Adresse mail</label>
                                    <input type="email" class="form-control" placeholder="Adresse email" id="email" required data-validation-required-message="Veuillez entrer votre adresse mail.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Numéro de téléphone</label>
                                    <input type="tel" class="form-control" placeholder="06/07........" id="phone" required data-validation-required-message="Veuillez entrer votre numéro de téléphone.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Veuillez entrer un message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Ou me trouver?</h3>
                    <p><?php echo $utilisateur['adresse']; ?></p> 
                    <p><?php echo $utilisateur['code_postale']. ' ' . $utilisateur['ville']; ?></p>                                           
                    <p><?php echo $utilisateur['email']; ?></p>                                           
                </div>
                <div class="footer-col col-md-4">
                    <h3>Réseaux Sociaux</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>A propos du freelance</h3>
                    <p>Freelance est un libre d'utiliser, open source Bootstrap thème créé par <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; TelgaCorp 2017
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="front/vendor/jquery/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="front/js/parallax.js-1.4.2/parallax.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="front/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="front/js/jqBootstrapValidation.js"></script>
<script src="front/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="front/js/freelancer.min.js"></script>

<script src="front/js/main.js"></script>

</body>

</html>
