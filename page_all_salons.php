<!doctype html>
<html lang="fr">
<head>
	<title>Tous les salons</title>
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
				<li id="current"><a href="#">Salon</a></li>
				<li ><a class="hvr-overline-reveal" href="page_galerie.php">Galerie</a></li>
				<li ><a class="hvr-overline-reveal" href="#">Histoire</a></li>
				<li ><a class="hvr-overline-reveal" href="page_info_pratique.php">Infos</a></li>
			</ul>
			<?php 
            session_start();
            if(isset($_SESSION['pseudo'])){?>
                <ul id="log">
                    <li>
                        <div class='mockup-content'>
                            <div class='morph-button morph-button-modal morph-button-modal-2 morph-button-fixed'>
                                <button type="button">
                                    <?php echo $_SESSION['pseudo'];?>
                                </button>
                            </div>
                        </div>
                    <li>
                    <li>
                        <div class='mockup-content'>
                            <div class='morph-button morph-button-modal morph-button-modal-2 morph-button-fixed'>
                                <button type="button">
                                    <a href="deconnexion.php">Déconnexion</a>
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            <?php 
            }           
            
            else{?>
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
										<form action="ink-finder.php" method="post">
											<p>
                                                <label>Email</label>
                                                <input type="email" name="email" required/>
                                            </p>
											<p>
                                                <label>Mot de passe</label>
                                                <input type="password" name ="password" required/>
                                            </p>
											<p>
                                                <input type="submit" name="submit" id="submit" value="se connecter"/>
                                            </p>
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
									<div class="content-style-form content-style-form-1 inscription">
										<span class="icon icon-close">Fermer</span>
										<h2>S'inscrire</h2>
										<form action="inscription.php" method="post">
											    <p>
                                                    <label>Pseudo</label>
                                                </p>
                                                <input type="text" name="pseudo" required/>               
                                                <p>
                                                    <label>Mot de passe</label>
                                                </p>
                                                <input type="password" name="password" required/>                
                                                <!--<p>
                                                    <label>Confirmer le mot de passe</label>
                                                </p>
                                                <input type="password" name="mdp_c" id="mdp_c"/>  -->             
                                                <p>
                                                    <label>Email</label>
                                                </p>
                                                    <input type="email" name="email" required/>                
                                                <p>
                                                    <label>Sexe</label>
                                                </p>
                                                    Femme<input type="radio" name="femme"/>
                                                    Homme<input type="radio" name="homme"/>               
                                                <p>
                                                    <label>Date de naissance (JJ/MM/AA)</label>
                                                </p>
                                                    <input type="date" name="date" required/>    
											    <p>
                                                     <input type="submit" name="submit" id="submit" value="s'inscrire"/>
                                                </p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>			
			</ul>
            <?php }?> 
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
			<ul id="galerie_salon">
				<h2 class="nom_tatoueurs">Tous les salons</h2>

                <li class="mix color-1 check11 check-lettrage check-asiatique check-oldschool check-réaliste check-dotwork option3"><a href="page_perso_salon.php?id=2"><img src="img/logo_salon/handinglove_logo.jpg" alt="Image 1"></a></li>

				<!--<li class="mix color-1 check12 radio2 option3"><img src="img/logo_salon/mysterytattoo.png" alt="Image 1"></li>


				<li class="mix color-1 check12 radio2 option3"><img src="img/logo_salon/starasian.png" alt="Image 1"></li>-->

				<li class="mix color-1 check4 check-réaliste check-newschool check-abstrait check-asiatique check-tribal radio2 option3"><a href="page_perso_salon.php?id=1"><img src="img/logo_salon/abraxas_logo.jpg" alt="Image 2"></a></li>

                <li class="mix color-1 check4 check-réaliste check-abstrait check-bioméca radio2 option3"><a href="page_perso_salon.php?id=3"><img src="img/logo_salon/labetehumaine_logo.jpg" alt="Image 3"></a></li>

                <li class="mix color-1 check15 check-oldschool check-newschool check-asiatique check-abstrait check-réaliste check-lettrage check-tribal  radio2 option3"><a href="page_perso_salon.php?id=4"><img src="img/logo_salon/mattattoo_logo.jpg" alt="Image 4"></a></li>

                <li class="mix color-1 check2 check-oldschool check-newschool check-asiatique check-abstrait check-réaliste check-dotwork check-tribal check-bioméca radio2 option3"><a href="page_perso_salon.php?id=5"><img src="img/logo_salon/artcorpus_logo.jpg" alt="Image 5"></a></li>

                <li class="mix color-1 check11 check-oldschool check-abstrait radio2 option3"><a href="page_perso_salon.php?id=6"><img src="img/logo_salon/chezmeme_logo.jpg" alt="Image 6"></a></li>			

			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
            
       <?php include_once('search_s.php');?><!--recherche dans le BD - résultat retourné -->           
			<form>
				<div class="cd-filter-block">
					<h4>Rechercher par arrondissement :</h4>

					<div class="cd-filter-content filter-arrond">
						<ul class="cd-filter-content cd-filters list">
							<li>
								
								<input  class="filter" data-filter=".check2" type="checkbox" id="checkbox2"/>	
								<label class="checkbox-label" for="checkbox2">
									
									2ème arrondissement

								</label>

							</li>							

							<li>
								
								<input  class="filter" data-filter=".check4" type="checkbox" id="checkbox4"/>	
								<label class="checkbox-label" for="checkbox4">
									
									4ème arrondissement

								</label>

							</li>
							<li>	
								<input  class="filter" data-filter=".check11" type="checkbox" id="checkbox11"/>	
								<label class="checkbox-label" for="checkbox11">
									
									11ème arrondissement
									
								</label>

							</li>
							<li>
								
								<input  class="filter" data-filter=".check15" type="checkbox" id="checkbox15"/>	
								<label class="checkbox-label" for="checkbox15">
									
									15ème arrondissement
									
								</label>

							</li>
						</ul>
					</div> <!-- cd-filter-content -->

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

								<input  class="filter" data-filter=".check-bioméca" type="checkbox" id="checkbox-bioméca"/>	
								<label class="checkbox-label" for="checkbox-bioméca">

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
	<script>
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
			})
();
</script>
</body>
</html>