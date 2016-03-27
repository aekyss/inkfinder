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
    <style type="text/css">
        h1{width:auto; display: inline; text-align: center;}
        form{text-align: center; margin-top:1em;}
        input{margin:1em; width:30%; height:1.5em;}
        #femme, #homme{width:5% !important; }
        p{margin:0.5em;}
    </style>
</head>
    <body>
        <header>
		<a href="ink-finder.php"><img id="logo" src="img/logo.png"></a>
        <h1>INSCRIPTION</h1>
	   </header>
        <section>
            <form method="post" action="">
                <p>
                    <label>Pseudo</label>
                </p>
                <input type="text" name="pseudo" id="pseudo"/>               
                <p>
                    <label>Mot de passe</label>
                </p>
                <input type="text" name="mdp" id="mdp"/>                
                <p>
                    <label>Confirmer le mot de passe</label>
                </p>
                <input type="text" name="mdp_c" id="mdp_c"/>               
                <p>
                    <label>Email</label>
                </p>
                    <input type="text" name="email" id="email"/>                
                <p>
                    <label>Sexe</label>
                </p>
                    Femme<input type="radio" name="femme" id="femme"/>
                    Homme<input type="radio" name="homme" id="homme"/>               
                <p>
                    <label>Date de naissance (JJ/MM/AA)</label>
                </p>
                    <input type="text" name="dn" id="dn"/>              
            </form>
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