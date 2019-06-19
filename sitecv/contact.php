<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title> Mon CV en ligne</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale=1.0">
			<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<h1>Calvin Sea Phanh</h1>
		</header>
		<nav>
			<div class="table">
				<ul>
					<li class="menu-ind">
						<a href="index.php">Accueil</a>
					</li>
					<li class="menu-exp">
						<a href="projets.php">Projets</a>
					</li>
					<li class="menu-hob">
						<a href="hobbies.php">Loisirs</a>
					</li>
					<li class="menu-con">
						<a href="contact.php">Contactez-moi !</a>
					</li><?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
					<li class="menu-dc">
						<a href="deco.php">Deconnexion</a>
					</li>
				<?php endif ?>
					
				</ul>
			</div>
		</nav>
		<section class="rouge">
			<h2 class="titre">Contactez-moi !</h2>
			<div class="sec">
				<p> SEND E-MAIL</p>
				<form action="contactform.php" method="post">
					<input type="text" name="name" placeholder="Full name">
					<input type="text" name="mail" placeholder="your e_mail">
					<input type="text" name="subject" placeholder="Subject">
					<textarea name="message" placeholder="Message"></textarea>
					<button type="submit" name="submit">SEND MAIL</button>
				</form>
			</div>
		</section>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>