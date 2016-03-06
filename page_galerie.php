<?php
    include_once("connexion.inc");//connexion à la BD  
    $bd->exec('SET NAMES utf8');    
?>
<!doctype html>
<html lang="fr">
<head>
	<title>Galerie</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/content.css" /> 
	<link rel="stylesheet" type="text/css" href="css/style2.css" /> 
	<link rel="stylesheet" type="text/css" href="css/normalize_galerie.css" /> 
	<link rel="stylesheet" type="text/css" href="css/demo_galerie.css" /> 


	<script type="text/javascript" src="js/uiMorphingButton_inflow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/uiMorphingButton_fixed.js"></script>

</head>
<body>
	<header>
		<a href="ink-finder.php"><img id="logo" src="img/logo.png"></a>
		<nav id="header_nav">
			<ul id="menu_header">
				<li ><a class="hvr-overline-reveal" href="ink-finder.php">Accueil</a></li>
				<li ><a class="hvr-overline-reveal" href="page_all_salons.php">Salon</a></li>
				<li id="current"><a href="page_galerie.php">Galerie</a></li>
				<li ><a class="hvr-overline-reveal" href="#">Histoire</a></li>
				<li ><a class="hvr-overline-reveal" href="page_info_pratique.php">Infos</a></li>
			</ul>
			<ul id="log">
				<li>
					<div class="mockup-content">
						<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
							<button type="button">Connexion</button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-1">
										<span class="icon icon-close">Fermer</span>
										<h2>Connexion</h2>
										<form>
											<p><label>Email</label><input type="text" /></p>
											<p><label>Mot de passe</label><input type="password" /></p>
											<p><button>Se connecter</button></p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="mockup-content">
						<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
							<button type="button">Inscription</button>
							<div class="morph-content">
								<div>
									<div class="content-style-form content-style-form-1">
										<span class="icon icon-close">Fermer</span>
										<h2>S'inscrire</h2>
										<form>
											<p><label>Email</label><input type="text" /></p>
											<p><label>Mot de passe</label><input type="password" /></p>
											<p><button>S'inscrire</button></p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>

				<!-- <li><a href="">Inscription</a></li> -->
			</ul>
		</nav>
	</header>

	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<h2 class="nom_tatoueurs">La galerie de tatouage</h2>
			<ul>
                <?php
				$req = $bd->query("SELECT * FROM tatouage");   
				while($photo = $req->fetch()){?>
				<li class="mix check-<?php echo $photo['style']; ?>">
					<a href="page_perso_salon.php?id=<?php echo $photo['id_salon'];?>">
                        <img src="img/tatouage_salon/<?php echo $photo['image'];?>">
                    </a>
                </li>
	           <?php }?>
                
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">

					<h4>Rechercher par style :</h4>
					<div class="cd-filter-content filter-style">
						<ul class="cd-filter-content cd-filters list list3">
							<li>

								<input  class="filter" data-filter=".check-oldschool" type="checkbox" id="checkbox-oldschool"/>	
								<label class="checkbox-label" for="checkbox-oldschool">

									Oldschool

								</label>

							</li>
							<li>	
								<input  class="filter" data-filter=".check-newschool" type="checkbox" id="checkbox-newschool"/>	
								<label class="checkbox-label" for="checkbox-newschool">

									Newschool

								</label>

							</li>
							<li>

								<input  class="filter" data-filter=".check-asiatique" type="checkbox" id="checkbox-asiatique"/>	
								<label class="checkbox-label" for="checkbox-asiatique">

									Asiatique

								</label>

							</li>

							<li>

								<input  class="filter" data-filter=".check-abstrait" type="checkbox" id="checkbox-abstrait"/>	
								<label class="checkbox-label" for="checkbox-abstrait">

									Abstrait / Minimaliste

								</label>

							</li>
							<li>	
								<input  class="filter" data-filter=".check-réaliste" type="checkbox" id="checkbox-réaliste"/>	
								<label class="checkbox-label" for="checkbox-réaliste">

									Réaliste / Portrait

								</label>

							</li>
							<li>

								<input  class="filter" data-filter=".check-dotwork" type="checkbox" id="checkbox-dotwork"/>	
								<label class="checkbox-label" for="checkbox-dotwork">

									Dot Work

								</label>

							</li>
                            <li>

								<input  class="filter" data-filter=".check-lettrage" type="checkbox" id="checkbox-lettrage"/>	
								<label class="checkbox-label" for="checkbox-lettrage">

									Lettrage

								</label>

							</li>
                            <li>

								<input  class="filter" data-filter=".check-tribal" type="checkbox" id="checkbox-tribal"/>	
								<label class="checkbox-label" for="checkbox-tribal">

									Tribal

								</label>

							</li>
                            <li>

								<input  class="filter" data-filter=".check-biomécanique" type="checkbox" id="checkbox-biomécanique"/>	
								<label class="checkbox-label" for="checkbox-biomécanique">

									Biomécanique

								</label>

							</li>
						</ul>
					</div>

					<!-- filter content -->

				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Fermer</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Affiner votre recherche</a>
	</main> <!-- cd-main-content -->

	<footer>
		<nav id="footer_nav">
			<ul>
				<li><a href="">Qui sommes-nous</a></li>
				<li>-</li>
				<li><a href="">Mentions légales</a></li>
				<li>-</li>
				<li><a href="">Le projet Ink Finder</a></li>
				<li>-</li>
				<li><a href="">Contact</a></li>
			</ul>
		</nav>
		<p>&copy; Ink Finder Paris, France</p>
		<div id="social">
			<a href=""><img src="img/fb.png"></a>
			<a href=""><img src="img/twitter.png"></a>
			<a href=""><img src="img/insta.png"></a>
		</div>
	</footer>



	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">


		(function() {
			var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();

				[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
					new UIMorphingButton( bttn, {
						closeEl : '.icon-close',
						onBeforeOpen : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterOpen : function() {
							// can scroll again
							canScroll();
						},
						onBeforeClose : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterClose : function() {
							// can scroll again
							canScroll();
						}
					} );
				} );

				// for demo purposes only
				[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
					bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
				} );
			})();
			

		</script>


	</body>
	</html>