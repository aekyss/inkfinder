<html>
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
				<li ><a class="hvr-overline-reveal" href="ink-finder.php">Accueil</a></li>
				<li ><a class="hvr-overline-reveal" href="page_all_salons.php">Salon</a></li>
				<li ><a class="hvr-overline-reveal" href="page_galerie.php">Galerie</a></li>
				<li ><a class="hvr-overline-reveal" href="#">Histoire</a></li>
				<li id="current"><a href="#">Infos</a></li>
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




	<section id="info_prat">
		<section id="faq">
			<h4 class="titre_info_prat">FAQ </h4>
			<a href="#" class="faq_titre">combien ça coûte?</a>
			<section>
				<p>
					Le prix d’un tatouage varie selon les salons : leur spécificités, leur niveau de reconnaissance mais aussi la taille du tatouage et si il est détaillé ou non. Pour connaître les tarifs d’un tatoueur, le mieux est de les contactés pour pouvoir discuter et faire un devis. 
				</p>
			</section>	
			<a href="#" class="faq_titre">Est-ce que ça fait mal? </a>
			<section>
				<p>
					La douleur dépend de la sensibilité de la personne qui se fait tatouer et l’endroit du tatouage. Certaines zones du corps sont reconnues pour être sensibles, notamment les endroits où la peau est plus fine mais aussi les zones où les os sont apparent, soit le cou, les pieds, chevilles et coude. 
				</p>
			</section>	
			<a href="#" class="faq_titre">Comment ça vieillit?</a>
			<section>
				<p>
					Avec le temps, et selon la qualité du tatouage, celui-ci vieillit en même temps que la peau : il peut baver et s’étendre, les traits deviennent plus flou et moins précis. Pour autant, la qualité et les nouvelles techniques et matériel de tatouage permettent de le conserver en bon état et d’imaginer quelques retouches, notamment pour les couleurs ou les contours. 
				</p>
			</section>	
			<a href="#" class="faq_titre">Mon tatouage ne me plaît pas ou plus, je fais quoi? </a>
			<section>
				Si jamais votre vous voulez vous séparer de votre tatouage, deux solutions s’offrent à vous : 
				<ul>
					<li>Le recouvrement, permettant de masquer votre tatouage grâce à un autre, désigné et colorisé pour permettre de cacher l’ancien. </li>
					<li>Le détatouage, fait par laser par un dermatologue permet d’enlever, à travers plusieurs séances et selon la taille du tatouage toute trace. De nos jours  il y a ade moins en moins de cicatrice grâce au nouvelles technologies. Pour autant, celui ci ne s’efface peut être pas totalement et est coûteux, il vaut mieux bien réfléchir en amont avant de se faire tatouer. 
					</li>
				</ul>
			</section>
		</section>
		<section id="soins">
			<h4 class="titre_info_prat">Les soins</h4>
			<section>
				<p>La période de cicatrisation d’un tatouage dure en général entre 10 et 15 jours.
					Durant ces 10-15 jours vous devrez suivre quelques conseils afin que votre peau cicatrise dans les meilleures conditions possibles. 
				</p>

				<h5>Tout d’abord il faut :</h5>
				<ul>
					<li>Laver le tatouage lors de la douche avec un savon antiseptique afin de ne pas irriter votre peau (Il faut éviter les gels douches car ils sont difficiles à rincer).</li>
					<li>Il faut ensuite rincer et sécher soigneusement votre tatouage.</li>
					<li>Une pommade cicatrisante et hydratante devra être appliquée sur votre tatouage (ex : Bepanthen) et cette opération devra être renouvelée toutes les 4 heures.</li>
				</ul>

				<h5>Il est conseillé de :</h5>
				<ul>
					<li>Porter des vêtements ample afin d’éviter que le tissu se colle au tatouage, de préférence du coton.</li>
					<li>Laisser à l’air libre le tatouage.</li>
				</ul>

				<h5>Ce qu’il ne faut absolument pas faire :</h5>
				<ul>
					<li>Éviter de  baigner dans l’eau (bain, piscine, plage etc.).</li>
					<li>Ne gratter en aucun cas le tatouage ou d’enlever les peaux mortes.</li>
					<li>Ne pas toucher son tatouage avec les mains sales.</li>
					<li>Laisser quelqu’un d’autre que soit toucher votre tatouage.</li>
					<li>Ne pas du tout exposer votre tatouage au soleil (en cas d’exposition au soleil appliquer une crème solaire sur le tatouage est fortement conseillé, de préférence indice 50).</li>
				</ul>
			</section>
		</section>

	</section>


	<!-- <footer>
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
	</footer> -->
	<script>

		var a = document.querySelectorAll(".faq_titre");

		function hideShow(e){
			(e.preventDefault) ? e.preventDefault() : (e.returnValue = false);
			var cur = e.target || e.srcElement,
			div = (cur.nextSibling.nodeType!==3) ? cur.nextSibling : cur.nextSibling.nextSibling;
			div.style.height = ((div.offsetHeight==0) ? div.scrollHeight : "0") + 'px';
		}

		for (var i=0, l=a.length; i<l; i++){
			document.addEventListener ? a[i].addEventListener("click", hideShow, false) : a[i].attachEvent("onclick", hideShow);
		}
	</script>
</body>
</html>