<?php
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$objet = $_POST['subject'];
	$message = $_POST['message'];
	$to = "speed_cube@hotmail.com";

	// If there are no errors, send the email
	if (mail ("$to", "$objet", "$message", "From: $email")) {
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
		<title>Alpha by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<script src="js/init.js"></script>

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
		</script>
		<!-- End of SMOOTH SCROLL -->

		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>

		<link rel="stylesheet" href="css/jquery.bxslider.css" />

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<section class="container">

			<header id="contacts">
				<h2><strong>Contactez-nous</strong></h2>
				<p>Vous êtes intéressés ou vous voulez en savoir plus sur notre activité ?<br /><br>
					Remplissez le formulaire ci-dessous, nous vous recontacterons très rapidement<br />
					afin de vous faire une proposition adaptée à vos besoins !</p>
				</header>

				<div class="box" id="">
					<form method="post" action="">
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

	</body>

</html>
