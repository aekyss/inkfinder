<?php
    include_once("connexion.inc");//connexion à la BD  
    $bd->exec('SET NAMES utf8');
    $req = $bd->query("SELECT * FROM salon WHERE id =".$_GET['id']); 
    $result = $req->fetch(); 
?>
<!doctype html>
<html lang="fr">
<head>
	<title><?= $result['nom_salon'] ?></title>
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
	<link rel="stylesheet" type="text/css" href="css/set2.css" />
	<link rel="stylesheet" type="text/css" href="css/content.css" /> 
	<script type="text/javascript" src="js/uiMorphingButton_inflow.js"></script>
	<script type="text/javascript" src="js/classie.js"></script>
	<script type="text/javascript" src="js/uiMorphingButton_fixed.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize() {
			var myLatLng = {lat: <?php echo $result['latitude']?>, lng: <?php echo $result['longitude']?>};

			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 16,
				center: myLatLng
			});
			var image = {
				url: 'img/marker-google.png',
				size: new google.maps.Size(40, 100),
				origin: new google.maps.Point(0,0),
				anchor: new google.maps.Point(15, 50)
			};
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: '<?php echo $result['nom_salon']?>',
				icon: image
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

</head>
<body>

	<header>
		<a href="index.php"><img id="logo" src="img/logo.png"></a>
		<nav id="header_nav">
			<ul id="menu_header">
				<li ><a class="hvr-overline-reveal" href="index.php">Accueil</a></li>
				<li ><a id="current" href="page_all_salons.php">Salon</a></li>
				<li class="hvr-overline-reveal"><a href="page_galerie.php">Galerie</a></li>
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

	<section id="container">        
		<h1 class="nom_salon"><?php echo $result['nom_salon']; ?></h1>
		<ul class="description_salon">
			<li class="logo_salon">
				<figure><img src="img/logo_salon/<?php echo $result['logo']?>"/></figure>
			</li>
			<li class="info_salon">	
				<table>
					<tbody>
						<tr>
							<th>Nom du salon :</th> 
							<td><?php echo $result['nom_salon']; ?></td>
						</tr>
						<tr>
							<th>Adresse :</th>   
							<td><?php echo $result['adresse']; ?>, 750<?php echo $result['arrond']; ?> Paris</td>
						</tr>
						<tr>
							<th>Téléphone :</th>  
							<td><?php echo $result['tel'];?></td>
						</tr>
						<tr>
							<th>Heures d'ouverture :</th>
							<td>Le <?php echo $result['jours_ouv'];?> de  <?php echo $result['heure_ouverture'];?> à  <?php echo $result['heure_fermeture'];?></td>
						</tr>
						<tr>
							<th>Site Web :</th> 
							<td><?php echo $result['site'];?></td>
						</tr>
						<tr>
							<th>Comment s'y rendre ? :</th>  
							<td><?php echo $result['trajet'];?></td>
						</tr>
					</tbody>
				</table>

			</li>
		</ul>
<?php         
    $req = $bd->query("SELECT * FROM tatoueur WHERE id_salon =".$_GET['id']);   
?>
		<section class="description_tatoueur">
			<h2 class="nom_tatoueurs">Les tatoueurs du salon "<?php echo $result['nom_salon']; ?>"</h2>
			<ul class="grid">
				<?php while($donnees = $req->fetch()){?>
				<li>
					<figure class="effect-julia">
						<img src="img/tatoueur/<?php echo $donnees['photo']; ?>">
						<figcaption>
							<h2><?php echo $donnees['nom_tatoueur']; ?></h2>
							<h4>Voir styles</h4>
							<p><?php echo $donnees['style']."\n"; ?></p>
						</figcaption>	
					</figure>
				</li>	
				<?php }?>
            </ul>
		</section>


		<section class="galerie_perso_salon">
			<h2 class="nom_tatoueurs">Tatouages réalisés par <?php echo $result['nom_salon']; ?></h2>
			<ul>
				<?php
				$req = $bd->query("SELECT * FROM tatouage WHERE id_salon =".$_GET['id']);   
				while($photo = $req->fetch()){?>
				<li>
					<figure>
						<img src="img/tatouage_salon/<?php echo $photo['image'];?>">
					</figure>
				</li>	
				<?php }?>
			</ul>
		</section>

		<h2 class="nom_tatoueurs">Où se trouve vraiment <?php echo $result['nom_salon']; ?> ?</h2>
		<div id="map"></div>

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