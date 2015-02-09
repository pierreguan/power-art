<?php
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$objet = $_POST['subject'];
	$message = $_POST['message'];
	$to = "info@dgpowerart.com";
	$to2 = "contact@powerart.fr";
	$body = "De: $name\n E-Mail: $email\n\n Message:\n\n $message";

	if (mail ("$to", "$objet", "$body", "From: $email")) {
		mail ("$to2", "$objet", "$body", "From: $email");
		$result='<div class="success">Votre message a bien été envoyé ! Nous vous recontacterons dès que possible.</div>';
	}
	else {
		$result='<div class="fail">Il y a eu un problème, veuillez essayer à nouveau.</div>';
	}
}
?>

<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Power Art - Fabricant de packagings en tissu depuis 2004</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Nous fabriquons et fournissons une gamme variée de packagings en tissu (pochettes, pochons…) de haute qualité et sur mesure, à destination des PME/PMI et commerçants indépendants." />
		<meta name="keywords" content="fabricant, usine, fournisseur, chine, france, humen, canton, packaging, tissu, textile, organza, suedine, coton, nylon, polyester, pochette, pochon, aumoniere" />

		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<script src="js/lightbox.min.js"></script>
		<script src="js/init.js"></script>

		<!-- SCRIPT GOOGLE ANALYTICS -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-56607731-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<!-- SMOOTH SCROLL -->
		<script>
		$(function() {
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});

		/* ACTIVATION SLIDER */
		$(function(){
			$('.bxslider').bxSlider({
				mode: 'fade',
				captions: true,
				controls: true,
				auto: true,
				pause: 8000,
				autoControls: true
			});
		});

		/* SCROLL TO TOP */

		$(function(){

			$(document).on( 'scroll', function(){

				if ($(window).scrollTop() > 100) {
					$('.scroll-top-wrapper').addClass('show');
				} else {
					$('.scroll-top-wrapper').removeClass('show');
				}
			});
		});

		$(function(){

			$(document).on( 'scroll', function(){

				if ($(window).scrollTop() > 100) {
					$('.scroll-top-wrapper').addClass('show');
				} else {
					$('.scroll-top-wrapper').removeClass('show');
				}
			});

			$('.scroll-top-wrapper').on('click', scrollToTop);
		});

		function scrollToTop() {
			verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
			element = $('body');
			offset = element.offset();
			offsetTop = offset.top;
			$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
		}

		</script>

		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>

		<link rel="stylesheet" href="css/jquery.bxslider.css" />
		<link rel="stylesheet" href="css/lightbox.css" />

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>

	<body class="landing">

	<!-- Bouton Scroll to Top -->
		<div class="scroll-top-wrapper ">
			<span class="scroll-top-inner">
				<i class="fa fa-2x fa-arrow-circle-up"></i>
			</span>
		</div>

		<!-- Header -->
			<header id="header" class="alt">
				<a href="#"><img src="images/logo.png" /></a>
				<nav id="nav">
					<ul>
						<li class="current"><a href="#societe">La société</a></li>
						<li><a href="#avantages">Avantages</a></li>
						<li><a href="#produits">Produits</a></li>
						<li><a href="#partenaires">Clients</a></li>
						<li><a href="#contacts" class="button special">Contact</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner" class="logo">
				<h2>Power Art</h2>
				<p>De beaux packagings en tissu, sur mesure.</p>
				<ul class="actions">
					<li><a href="#contacts" class="button">Contactez-nous</a></li>
				</ul>
			</section>

		<!-- PARTIE PRESENTATION DE LA SOCIETE -->

		<div class="fond-societe">

			<section id="main" class="container 125%">

				<section class="box special" id="societe">
					<header class="major">
						<h2><strong>Qui sommes-nous ?</strong></h2>
						<p>Nous fabriquons et fournissons une gamme variée de <strong>pochettes en tissu</strong><br>
						pour <strong>PME/PMI</strong> et commerçants indépendants.<br><br>
						Fort de <strong>10 ans</strong> d’expérience et de savoir-faire dans le domaine, nous disposons d’une main d’œuvre<br>
						<strong>qualifiée</strong>, <strong>expérimentée</strong>, ainsi que d’une <strong>grande capacité de production</strong>.<br><br>
					</header>

					<ul class="bxslider">
						<li><img src="images/usine-exterieur.jpg" alt="usine" style="-webkit-filter: opacity(0.9)" title="Usine (vue extérieur)" /></li>
						<li><img src="images/usine-cour.jpg" alt="usine" style="-webkit-filter: opacity(0.9)" title="Usine (vue sur la cour)" /></li>
						<li><img src="images/usine-interieur.jpg" alt="usine" style="-webkit-filter: sepia (0.5) opacity(0.9)" title="Usine (vue intérieur)" /></li>
						<li><img src="images/usine-atelier.jpg" alt="serigraphie" style="-webkit-filter: opacity(0.9)" title="Atelier de sérigraphie" /></li>
						<li><img src="images/usine-ouvrier.jpg" alt="marquage a chaud" style="-webkit-filter: opacity(0.9)" title="Marquage à chaud" /></li>
					</ul>

						<p>Notre usine est basée à <strong>Humen</strong> (Chine), au coeur de la plus grande zone de l'industrie textile en Chine.<br>
							Elle compte à ce jour plus de <strong>200 employés</strong>.<br><br>
							Nous accordons une importance particulière à la <strong>confiance</strong> et à la <strong>satisfaction</strong> de nos clients.<br /><br />
							Nos valeurs fondatrices sont : <strong>Excellence</strong>, <strong>Intégrité</strong>, et <strong>Professionnalisme</strong>.</p>
						</p>
						<span id="avantages"></span>
				</section>

			</section>

		</div>

				<!-- TEST PARTIE AVANTAGES -->

			<section id="main" class="container 125%">

				<header class="container 125%">

					<h2><strong>Nos avantages</strong></h2>
				</header>

				<section class="wrapper style1 container 125% special" style="letter-spacing: 0">
					<div class="row">
						<div class="4u 12u(2)">

							<section class="avantages">
								<span class="icon featured fa-globe fa-5x"></span>
								<header>
									<h3><strong>Francophone</strong></h3>
								</header>
								<p>En tant qu'entreprise francophone, le français est notre première langue de communication.</p>
							</section>

						</div>
						<div class="4u 12u(2)">

							<section class="avantages">
								<span class="icon featured fa-euro fa-5x"></span>
								<header>
									<h3><strong>Prix</strong></h3>
								</header>
								<p>Nous nous spécialisons depuis 10 ans dans la fabrication de packagings en tissu, ce qui nous apporte une meilleure maîtrise des coûts et un avantage concurrentiel.</p>
							</section>

						</div>
						<div class="4u 12u(2)">

							<section class="avantages">
								<span class="icon featured fa-truck fa-5x"></span>
								<header>
									<h3><strong>Délai de livraison</strong></h3>
								</header>
								<p>Dotés d'un réseau de sous-traitance et de fourniture en matières premières performant, nous vous garantissons des délais de livraison rapides et fiables.</p>
							</section>

						</div>
						<div class="4u 12u(2)">

							<section class="avantages">
								<span class="icon featured fa-angellist fa-5x"></span>
								<header>
									<h3><strong>Simplicité</strong></h3>
								</header>
								<p>Plus besoin de passer par des intermédiaires : nous sommes en mesure de gérer intégralement la prise de votre demande, la production, le transport, et l'acheminement de la marchandise.</p>
							</section>

						</div>
						<div class="4u 12u(2)">

							<section class="avantages">
								<span class="icon featured fa-certificate fa-5x"></span>
								<header>
									<h3><strong>Qualité</strong></h3>
								</header>
								<p>La qualité occupe une place primordiale dans notre fabrication. Une équipe de personnels dédiée et un processus de contrôle pièce par pièce rigoureux interviennent à chaque étape de la production.</p>
							</section>

						</div>
						<div class="4u 12u(2)">

							<section class="avantages">
								<span class="icon featured fa-credit-card fa-5x"></span>
								<header>
									<h3><strong>Paiement sécurisé</strong></h3>
								</header>
								<p>Vous pouvez choisir entre le transfert bancaire et PayPal qui assure votre remboursement en cas de litige.</p>
							</section>

						</div>
					</div>
				</section>
			</section>

		<!-- TEST PARTIE PRODUITS -->

<div class="fond-societe">

	<section id="main" class="container 125%">

		<section class="box special container 125%" id="produits">

			<header id="produit_desc" class="major">
				<h2><strong>Nos produits</strong></h2>
				<p>
					Nous fabriquons sur mesure des pochettes en tissu :<br>
					<i><strong>Coton, coton bio, satin, organza, suédine, jute, lin, taffeta, nylon, polyester, non tissé, similicuir...</strong></i><br><br>
					Nous assurons également les travaux de personnalisation :<br>
					<i><strong>Sérigraphie, marquage à chaud, transfert, broderie...</strong></i><br><br>
					Ci-dessous quelques exemples de nos produits :
				</p>
			</header>

			<div class="row">
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit1.jpg" data-lightbox="produits" class="image featured" data-title="Pochon en coton bio avec sérigraphie de 10 couleurs plein cadre"><img src="images/produits/produit1.jpg" alt="Pochon en coton bio" /></a>
						<header>
							<h3>Pochon en coton bio</h3>
						</header>
						<p>Sérigraphie de 10 couleurs plein cadre
						</p>
					</section>

				</div>
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit2.jpg" data-lightbox="produits" data-title="Pochette en non tissé écru" class="image featured"><img src="images/produits/produit2.jpg" alt="Pochette en non tissé écru" /></a>
						<header>
							<h3>Pochette en non tissé écru</h3>
						</header>
					</section>

				</div>
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit3.jpg" data-lightbox="produits" data-title="Filet de lavage en polyester blanc" class="image featured"><img src="images/produits/produit3.jpg" alt="Filet de lavage" /></a>
						<header>
							<h3>Filet de lavage</h3>
						</header>
						<p>
							En polyester blanc
						</p>
					</section>

				</div>
			</div>

			<div class="row">
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit4.jpg" data-lightbox="produits" data-title="Pochette de bijoux en satin mat avec fermeture bouton pression" class="image featured"><img src="images/produits/produit4.jpg" alt="Pochette de bijoux" /></a>
						<header>
							<h3>Pochette de bijoux</h3>
						</header>
						<p>
							En satin mat avec fermeture bouton pression
						</p>
					</section>

				</div>
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit6.jpg" data-lightbox="produits" data-title="Pochon de senteur en jut naturel avec sérigraphie" class="image featured"><img src="images/produits/produit6.jpg" alt="Pochon de senteur" /></a>
						<header>
							<h3>Pochon de senteur</h3>
						</header>
						<p>
							En jut naturel avec sérigraphie
						</p>
					</section>

				</div>
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit7.jpg" data-lightbox="produits" data-title="Pochette de bijoux haut-de-gamme, en double taffeta bi-color" class="image featured"><img src="images/produits/produit7.jpg" alt="Pochette de bijoux" /></a>
						<header>
							<h3>Pochette de bijoux</h3>
						</header>
						<p>
							Haut-de-gamme, en double taffeta bi-color
						</p>
					</section>

				</div>
			</div>

			<div class="row">
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit8.jpg" data-lightbox="produits" data-title="Pochette de tylo en satin avec broderie" class="image featured"><img src="images/produits/produit8.jpg" alt="Pochette de tylo" /></a>
						<header>
							<h3>Pochette de tylo</h3>
						</header>
						<p>
							En satin avec broderie
						</p>
					</section>

				</div>
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit11.jpg" data-lightbox="produits" data-title="Pochon de chaussures en lin, avec sérigraphie doré" class="image featured"><img src="images/produits/produit11.jpg" alt="Pochon de chaussures" /></a>
						<header>
							<h3>Pochon de chaussures</h3>
						</header>
						<p>
							En lin, avec sérigraphie doré
						</p>
					</section>

				</div>
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit5.jpg" data-lightbox="produits" data-title="Aumônière en organza avec ruban" class="image featured"><img src="images/produits/produit5.jpg" alt="Aumônière en organza" /></a>
						<header>
							<h3>Aumônière en organza</h3>
						</header>
						<p>
							Avec ruban
						</p>
					</section>
				</div>
			</div>

			<div class="row">
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit9.jpg" data-lightbox="produits" data-title="Aumônière de vin en similicuir avec marquage à chaud doré" class="image featured"><img src="images/produits/produit9.jpg" alt="Aumônière de vin" /></a>
						<header>
							<h3>Aumônière de vin</h3>
						</header>
						<p>En similicuir avec marquage à chaud doré</p>
					</section>

				</div>
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit10.jpg" data-lightbox="produits" data-title="Aumônière de parfum en suédine simple face avec cordon en queue de rat" class="image featured"><img src="images/produits/produit10.jpg" alt="Aumônière de parfum" /></a>
						<header>
							<h3>Aumônière de parfum</h3>
						</header>
						<p>
							En suédine simple face avec cordon en queue de rat
						</p>
					</section>

				</div>
				<div class="4u 12u(2)">

					<section class="produits">
						<a href="images/produits/produit12.jpg" data-lightbox="produits" data-title="Aumônière de lunettes en polyester blanc" class="image featured"><img src="images/produits/produit12.jpg" alt="Aumônière de lunettes" /></a>
						<header>
							<h3>Aumônière de lunettes</h3>
						</header>
						<p>
							En polyester blanc
						</p>
					</section>
				</div>
			</div>

		</div>
			<span id="partenaires"></span>
		</section>

	</section>

	</div>

		<!-- TEST PARTIE PARTENAIRES -->

	<section id="main" class="container 125%">

		<header class="container 125%">

			<h2><strong>Nos partenaires</strong></h2>
			<p>Nous avons travaillé pour des <strong>grandes marques</strong> françaises et multinationales.<br><br>
				Nos clients interviennent dans les industries suivantes : <br><strong><i>bijoux, cosmétiques, parfums, jeux, agro-alimentaire, chaussures</i></strong>...
			</p>
		</header>

		<header class="container 125%">
			<section id="clients" class="logos-partenaires">
				<a href="http://www.vancleefarpels.com/eu/fr/" target="_blank"><img src="images/van_cleef_logo.png" /></a>
				<a href="http://www.loreal.fr/" target="_blank"><img src="images/loreal_logo.png" /></a>
				<a href="http://www.lesnereides.com/" target="_blank"><img src="images/lesnereides_logo.png" /></a>
				<a href="http://montaleparfums.com/fr/" target="_blank"><img src="images/montale_logo.png" /></a>
				<a href="http://www.asmodee.com/" target="_blank"><img src="images/asmodee-logo.png" /></a>
				<a href="http://www.milletinnovation.com/" target="_blank"><img src="images/millet_innovation_logo.png" /></a>
			</section>
		</header>

	</section>

<!-- SECTION CONTACTS -->

		<section id="main" class="container 75%">

			<header id="contacts">
				<h2><strong>Contactez-nous</strong></h2>
				<p>Vous êtes intéressés ou vous voulez en savoir plus sur notre activité ?<br /><br>
					Remplissez le formulaire ci-dessous, nous vous recontacterons très rapidement<br />
					afin de vous faire une proposition adaptée à vos besoins !</p>
			</header>

			<div class="box" id="contact-form">
				<form method="post" action="#contact-form">
					<?php echo $result; ?>
					<div class="row uniform 50%">
						<div class="6u 12u(3)">
							<input required type="text" name="name" id="name" value="" placeholder="Votre nom" />
						</div>
						<div class="6u 12u(3)">
							<input required type="email" name="email" id="email" value="" placeholder="Votre e-mail" />
						</div>
					</div>
					<div class="row uniform 50%">
						<div class="12u">
							<input type="text" name="subject" id="subject" value="" placeholder="Objet" />
						</div>
					</div>
					<div class="row uniform 50%">
						<div class="12u">
							<textarea required name="message" id="message" placeholder="Votre message" rows="6"></textarea>
						</div>
					</div>
					<div class="row uniform">
						<div class="12u">
							<ul class="actions align-center">
								<li><input type="submit" value="Envoyer" name="submit" /></li>
							</ul>
						</div>
					</div>
				</form>
			</div>
		</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; 2014 Power Art. Tous droits réservés.</li>
				</ul>
			</footer>

	</body>
</html>
