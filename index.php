<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();

if (login_check($bdd) == true) {
    $logged = 'Connecté';
} else {
    $logged = 'Non Connecté';
}
?>
	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php title();?></title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Accueil</a></li>
                        <li class="scroll"><a href="#cta2">A Propos</a></li>
                        <li class="scroll"><a href="#animated-number">Deals</a></li>
                        <li class="scroll"><a href="#about">Aide</a></li>
                        <li class="scroll"><a data-toggle="modal" data-target="#connexion">Connexion</a></li>
                        <li class="scroll"><a data-toggle="modal" data-target="#contact">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Comité d'Entreprise</span>
									</br>de la société M2L</h2>
                                    <p>Profitez des meilleures offres du moment!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
			<div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Ecoutez vos enfants!</h2>
                                    <p>Profitez de toutes nos sorties adaptées à la petite enfance, des loisirs éducatifs aux parcs sportifs! N'hésitez pas à visiter nos différentes rubriques.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

<section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
				
                <div class="col-sm-9" style="height: 140px; width : 100%; overflow: auto; ">
                    <h2>News</h2>
				<?php 
 
					while( $result = $reponse ->fetch())
					{ ?>
						<div class="col-sm-9">
						<h2><?php echo $result['titre'];?></h2>
						<p><?php echo $result['article'] ?></p>
						<p>Publié le <?php echo $result['date']?><strong></strong></p>			
				
				</div>
				<?php
					}
				?>
                    
                </div>
                <div style="float: right" class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#connexion">Commencer!</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->


    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>Le Comité d'Entreprise</span> est là pour vous!</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Le CE existe grâce à vous, pour vous! N'hésitez pas à profiter de tous les bons plans disponibles</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Je commence!</a></p>
                <img class="img-responsive wow fadeIn" src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>

	<!-- Connexion / Inscription -->

	<section id="connexion" class="modal fade" role="dialog">
		<div class="modal-dialog"> 
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Connexion à l'espace membre</h4>
				</div>
				<div class="modal-body">
 
						<script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
       <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form action="includes/process_login.php" method="post" name="login_form"> 			
            Email: <input type="text" name="email" />
            Password: <input type="password" 
                             name="password"  
                             id="password"/>
            <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>
 
		<?php
			if (login_check($bdd) == true) {
                echo '<p>Actuellement connecté en tant que ' . $logged . htmlentities($_SESSION['username']) . '.</p>';
 				echo '<p>Voulez-vous changer d\'utilisateur ? <a href="includes/logout.php">Se Déconnecter</a>.</p>';
		} else {
                echo '<p>Actuellement : ' . $logged . '.</p>';
                echo "<p>Pas encore inscrit ? <a data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#inscription\">Cliquez-ici!</a></p>";
        }
		?>      
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</section>

    <section id="inscription" class="modal fade" role="dialog">

		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Inscription</h4>
				</div>
				<div class="modal-body">
<?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Le nom d’utilisateur ne peut contenir que des nombres, des lettres en minuscule et majuscule et des underscores</li>
            <li>Les emails doivent avoir un format valide</li>
            <li>Le mot de passe doit avoir au moins 6 caractères</li>
            <li>Le mot de passe doit contenir
                <ul>
                    <li>Au moins une lettre majuscule (A..Z)</li>
                    <li>Au moins une lettre minuscule (a..z)</li>
                    <li>Au moins un chiffre (0..9)</li>
                </ul>
            </li>
            <li>Les deux mots de passe entrés doivent être exactement les mêmes</li>
        </ul>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
            Username: <input type='text' 
                name='username' 
                id='username' /><br>
            Adresse email: <input type="text" name="email" id="email" /><br>
            Mot de passe: <input type="password"
                             name="password" 
                             id="password"/><br>
            Confirmez le mot de passe: <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
            <input type="button" 
                   value="S’enregistrer" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
        <p>Retournez à la page d’<a href="index.php">inscription</a>.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</section><!--/#connexion-->

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Quelques Statistiques</h2>

            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="13" data-duration="1000"></div>
                        <strong>Voyages Disponibles</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="27" data-duration="1000"></div>
                        <strong>Sorties Disponibles</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="6" data-duration="1000"></div>
                        <strong>Places de Cinéma Disponibles</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="12504" data-duration="1000"></div>
                        <strong>Employés Ravis!</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->

    <section id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Comment profiter du CE?</h2>

            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing">
							<div class="panel-heading">
								<p><strong>Etape 1</strong></p>
							</div>
							<div class="panel-body">
								<p>Faire partie de la Maison des Ligues de Loraine. Seuls les adhérents sont éligibles.</p>
							</div>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing">
                            <div class="panel-heading">
								<p><strong>Etape 2</strong></p>
							</div>
							<div class="panel-body">
								<p>Choisir un ou plusieurs bons plans disponibles. </p>
							</div>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                        <ul class="pricing">
                            <div class="panel-heading">
								<p><strong>Etape 3</strong></p>
							</div>
							<div class="panel-body">
								<p>Vérifier le nombre de places disponibles.</p>
							</div>
                        </ul>
                    </div>
                </div>
				<div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                        <ul class="pricing">
                            <div class="panel-heading">
								<p><strong>Etape 4</strong></p>
							</div>
							<div class="panel-body">
								<p>Faire une demande!</p>
							</div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#pricing-->
   
    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Get in Touch</h2>
                <p class="text-center wow fadeInDown">Soyez avertis avant tout le monde de tous les nouveaux loisirs grâce à notre NewsLetter. Inscrivez-vous!</p>
            </div>
        </div>
    </section><!--/#get-in-touch-->

	<section id="contact" class="modal fade" role="dialog">
		<div class="modal-dialog"> 
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Contactez-nous</h4>
				</div>
				<div class="modal-body">
							
								<p>Vous avez la possibilité de nous envoyer une lettre (prévoir le temps d'envoi) ou bien de nous appeler. Nos équipes sont disponibles du Lundi au Vendred (Hors Fériés) de 8h à 17h.</p>
								<address>
									<strong>Comité d'Entreprise </strong><br>
									Maison des Ligues de Loraine<br>
									749 Evergreen Terrasse<br>
									Springfield</br>
									<abbr title="Phone">Tel:</abbr> (+33) 1 12 34 56 78
								</address>

								<form id="main-contact-form" name="contact-form" method="post" action="#">
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Name" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="text" name="subject" class="form-control" placeholder="Subject" required>
									</div>
									<div class="form-group">
										<textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Envoyer</button>
								</form>

					
				</div>
			</div>
		</div>
	</section>
    <!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
				&copy; 2016 M2L - CE | All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
