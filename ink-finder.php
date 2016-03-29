<!doctype html>
<html lang="fr">
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/content.css" />

	<link rel="stylesheet" type="text/css" href="css/set2.css" />

	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="js/uiMorphingButton_inflow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/uiMorphingButton_fixed.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
</head>
<body>
	<header>
		<a href="ink-finder.php"><img id="logo" src="img/logo.png"></a>
		<nav id="header_nav">
			<ul id="menu_header">
				<li id="current"><a href="ink-finder.php">Accueil</a></li>
				<li ><a class="hvr-overline-reveal" href="page_all_salons.php">Salon</a></li>
				<li ><a class="hvr-overline-reveal" href="page_galerie.php">Galerie</a></li>
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
									<div class="content-style-form content-style-form-1 inscription">
										<span class="icon icon-close">Fermer</span>
										<h2>S'inscrire</h2>
										<form action="inscription.php" method="post">
											    <p>
                                                    <label>Pseudo</label>
                                                </p>
                                                <input type="text" name="pseudo" id="pseudo"/>               
                                                <p>
                                                    <label>Mot de passe</label>
                                                </p>
                                                <input type="password" name="password" id="password"/>                
                                                <!--<p>
                                                    <label>Confirmer le mot de passe</label>
                                                </p>
                                                <input type="password" name="mdp_c" id="mdp_c"/>  -->             
                                                <p>
                                                    <label>Email</label>
                                                </p>
                                                    <input type="email" name="email" id="email"/>                
                                                <p>
                                                    <label>Sexe</label>
                                                </p>
                                                    Femme<input type="radio" name="femme" id="femme"/>
                                                    Homme<input type="radio" name="homme" id="homme"/>               
                                                <p>
                                                    <label>Date de naissance (JJ/MM/AA)</label>
                                                </p>
                                                    <input type="date" name="dn" id="dn"/>    
											<p><input type="submit" name="submit" id="submit" value="s'inscrire"/></p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>			
			</ul>
		</nav>
	</header>
	<section id="search_sect">
		<p>Ink finder vous aide dans la recherche d’un salon de tatouage parmi les meilleurs tatoueurs de la ville de Paris.</p>
        	<?php
					//si login ou mot de passe faux
					if(isset($_GET['error']))
						echo "<p>Remplissez le(s) champs manquant(s)</p><br/>\n";
				?>
		<form id="search_salon" action="page_all_salons.php" method="post">
			<select name="arrond" class="styled_form styled_select white">
                <option value="0">Arrondissement</option>
				<option value="2">2eme arrondissement</option>
				<option value="4">4eme arrondissment</option>
                <option value="11">11eme arrondissment</option>
                <option value="15">15eme arrondissment</option>
			</select>
			<select name="style" class="styled_form styled_select white">
				<option value="vide">Style(s)</option>
				<option value="tribal">Tribal</option>
				<option value="asiatique">Asiatique</option>
				<option value="dotwork">Dot Work</option>
                <option value="oldschool">Old School</option>
                <option value="newschool">New School</option>
                <option value="lettrage">Lettrage</option>
                <option value="réaliste">Réaliste/Portrait</option>
                <option value="abstrait">Abstrait/Minimaliste</option>
                <option value="bioméca">Biomécanique</option>
            </select>
			<input class="styled_form" type="text" id="text_form" placeholder="Tatoueur...">
			<input class="styled_form" id="button" type="submit" value="Trouver un salon">
		</form>   
	</section>
	<section id="new_salons">
		<h4>Les derniers salons ajoutés :</h4>
		<ul id="logo_salons" class="grid">
			<li>
				<figure class="effect-julia">
					<img src="img/logo_salon/handinglove_logo.jpg">
					<a href="page_perso_salon.html">
						<figcaption>
							<h4>Hand in Glove</h4>
							<p>Voir fiche salon</p>
						</figcaption>
					</a>
				</figure>
			</li>
			<li>
				<figure class="effect-julia">
					<img src="img/logo_salon/handinglove_logo.jpg">
					<a href="page_perso_salon.html">
						<figcaption>
							<h4>Hand in Glove</h4>
							<p>Voir fiche salon</p>
						</figcaption>
					</a>
				</figure>
			</li>
			<li>
				<figure class="effect-julia">
					<img src="img/logo_salon/handinglove_logo.jpg">
					<a href="page_perso_salon.html">
						<figcaption>
							<h4>Hand in Glove</h4>
							<p>Voir fiche salon</p>
						</figcaption>
					</a>
				</figure>
			</li>

		</ul>
	</section>
	<section id="article">
		<h4>L'article du jour : </h4>
		<figure>
			<img src="img/article.png">
			<figcaption>
				<p>La culture tatouage s'invite à Montreuil les 17 et 18 octobre 2015 !</p>
				<a href="page_article.php">Voir l'article</a>
			</figcaption>
		</figure>
	</section>
	<section id="itw">
		<h4>L'interview du jour :</h4>
		<figure>
			<img src="img/itw2.png">
			<figcaption>
				<p>Interview d'Armelle, tatoueuse de Chez Mémé</p>
				<a href="page_interview.php">Voir l'article</a>
			</figcaption>
		</figure>
	</section>
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