<!doctype html>
<html lang="fr">
<head>
	<title>Interview</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/content.css" />
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="js/uiMorphingButton_inflow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/uiMorphingButton_fixed.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<style type="text/css">
		.question {
			font-weight: bold;
		}
	</style>
</head>
<body>
	<header>
		<a href="ink-finder.php"><img id="logo" src="img/logo.png"></a>
		<nav id="header_nav">
			<ul id="menu_header">
				<li id="current"><a href="ink-finder.php">Accueil</a></li>
				<li ><a class="hvr-overline-reveal" href="page_all_salons.php">Salon</a></li>
				<li ><a class="hvr-overline-reveal" href="page_galerie.php">Galerie</a></li>
				<li ><a class="hvr-overline-reveal" href="page_histoire.php">Histoire</a></li>
				<li ><a class="hvr-overline-reveal" href="page_info_pratique.php">Infos</a></li>
			</ul>
			<?php 
            session_start();
            if(isset($_SESSION['pseudo'])){
               $pseudo = $_SESSION['pseudo'];
            ?>
                <ul id="log">
                    <li>
                        <div class='mockup-content'>
                            <div class='morph-button morph-button-modal morph-button-modal-2 morph-button-fixed'>
                                <button type="button">
                                    <a href="profil.php?pseudo=<?php echo $pseudo; ?>">
                                        <?= $pseudo; ?>
                                    </a>
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
    <div id="hidden-div"></div>
	<section id="page_article">
		<article>
			<h1>Interview d'Armelle, tatoueuse de Chez Mémé</h1>
			<figure id="illus_article">
				<img src="img/armellestb.jpg">
				<figcaption id="date_article">
					<p>publié le 17 janvier 2016</p>
				</figcaption>
			</figure>
			<div id="text_article">
				<p class="question">Depuis combien de temps êtes-vous tatoueuse ?</p>
				<p>Cela fait 4 ans.</p>
				<p class="question">Qu’est-ce qui vous a poussé à faire ce boulot ?</p> 
				<p>Je me faisais pas mal tatouer, et on m'a proposé un apprentissage. J'ai tenté et ça m'a beaucoup plu !</p>

				<p class="question">Comment avez-vous fait pour faire ce métier ?</p> 
				<p>J'ai appris "sur le tas", avec un maître d'apprentissage qui m'a appris ce qu'il y avait à savoir, et m'a guidé. </p>
				<p class="question">Comment définiriez-vous votre style ?</p> 
				<p>Je fais de la gravure dans un style un peu vintage, un peu ancien.</p>

				<p class="question">Quand avez-vous ouvert votre propre salon et pourquoi ?</p> 
				<p>Nous avons ouvert Chez Mémé avec deux copines début Septembre 2014. On avait envie de tenter l'aventure d'avoir notre propre boîte, et on voulait travailler ensemble.</p>

				<p class="question">Quels genres de clientèle avez-vous ?</p> 
				<p>La clientèle est très variée... On reçoit tous les milieux et tous les âges (majeurs évidemment).</p>

				<p class="question">Vous arrive-t-il de refuser des tatouages et pourquoi ?</p> 
				<p>Oui, ça peut m'arriver quand ça ne correspond pas à ce que je fais, ou quand la personne est mineure.</p>

				<p class="question">Que pensez vous du principe de notre application ?</p> 
				<p>Je pense qu'elle peut être utile, étant donné l'offre qui a considérablement augmentée ces dernières années, les gens peuvent être un peu perdus. Il ne reste plus qu'à voir comment elle sera faite. Personnellement je me sers d'Instagram.</p>
				<p class="question">Que prévoyez vous pour la suite ?</p> 
				<p>Faire de la couleur.. Non je blague. Je prévois d'essayer de voyager un peu plus à l'étranger. </p>
			</div>
		</article>
		<aside>
			<h4>Les autres interviews</h4>
			<figure class="autre_article">
				<img style="background-color:#a40000; height:100px; width:100px; border:none;">
				<figcaption class="titre_article">
					<p>Titre de l'interview</p>
				</figcaption>
			</figure>
			<figure class="autre_article">
				<img style="background-color:#a40000; height:100px; width:100px;">
				<figcaption class="titre_article">
					<p>Titre de l'interview</p>
				</figcaption>
			</figure>
			<h4 id="share">Partager l'interview</h4>
			<ul class="share-buttons">
				<li>
					<a href="https://www.facebook.com/sharer/sharer.php?u=&t=Ink%20Finder" title="Share on Facebook" target="_blank">
						<img src="img/share/Facebook.png">
					</a>
				</li>
				<li>
					<a href="https://twitter.com/intent/tweet?source=&text=Ink%20Finder:%20" target="_blank" title="Tweet">
						<img src="img/share/Twitter.png">
					</a>
				</li>
				<li>
					<a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+">
						<img src="img/share/Google+.png">
					</a>
				</li> 
			</ul>
		</aside>
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