<!doctype html>
<html lang="fr">
<head>
	<title>Article</title>
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
				<li ><a class="hvr-overline-reveal" href="#">Infos</a></li>
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
    <div id="hidden-div"></div>
	<section id="page_article">
		<article>
			<h1>Titre de l'article</h1>
			<figure id="illus_article">
				<img src="img/article.png">
				<figcaption id="date_article">
					<p>publié le 17 janvier 2016</p>
				</figcaption>
			</figure>
			<div id="text_article">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in auctor tellus. Sed porttitor felis nec eros vestibulum varius. Fusce placerat metus vitae ligula ultricies, ut dapibus sapien lacinia. Curabitur accumsan erat at sem imperdiet sollicitudin. Sed iaculis, dolor ut mollis mattis, nisi purus efficitur metus, ac condimentum enim turpis ut ante. Curabitur in mauris commodo, fringilla massa in, ultricies lacus. Aliquam sem dolor, efficitur finibus nisl sit amet, congue luctus lacus. Aliquam eu diam est. Mauris sed orci sed velit facilisis elementum. Vivamus convallis, turpis ac pellentesque ultrices, nunc est egestas elit, a facilisis nisi eros non velit. Aliquam varius ex magna, sit amet tempor orci malesuada quis. Quisque eu dapibus arcu. Duis egestas, leo at ultrices ultrices, eros lacus ornare sem, ac vehicula nunc lacus vel neque. Vestibulum viverra est a ipsum convallis, at tempus sem sagittis.</p>
				<p>Duis non condimentum eros. Aliquam suscipit neque sit amet pellentesque venenatis. Maecenas nec blandit nibh, ac ullamcorper nisi. Sed aliquam semper sagittis. In convallis ipsum a mi vulputate maximus. Maecenas eget dolor convallis, feugiat felis at, efficitur ante. Fusce nisl tortor, rhoncus nec malesuada sed, vestibulum in purus. In malesuada, nulla ut porta auctor, nisi urna feugiat odio, ac ornare magna ligula ut nunc. Fusce iaculis non ante et vehicula. Integer mollis nisl ut ornare vehicula.</p>
			</div>
		</article>
		<aside>
			<h4>Les autres articles</h4>
			<figure class="autre_article">
				<img style="background-color:#a40000; height:100px; width:100px;">
				<figcaption class="titre_article">
					<p>Titre de l'article</p>
				</figcaption>
			</figure>
			<figure class="autre_article">
				<img style="background-color:#a40000; height:100px; width:100px;">
				<figcaption class="titre_article">
					<p>Titre de l'article</p>
				</figcaption>
			</figure>
			<h4 id="share">Partager l'article</h4>
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