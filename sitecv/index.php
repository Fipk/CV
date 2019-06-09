<?php session_start()?><!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title> Mon CV en ligne</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale=1.0">
		<meta name="description" content="Présentation de Calvin Sea Phanh - CV">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php 
			require_once 'database.php';
			require_once 'function.php';
		 ?>
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
					</li>
				</ul>
			</div>
		</nav>
		<article>
			<section class="presentation">
				<div class="sec">
					<h2 class="titre">Qui suis-je ?</h2>
					<div class="left">
						<img src="images/logofini.gif" alt="Photo d'identité de Calvin Sea Phanh">
					</div>
					<div class="right">
						<p>Je m'appelle Calvin Sea Phanh, j'ai 20 ans et je vis à Bordeaux.</p>
						<p>Je suis actuellement étudiant en première année à Ingésup.</p>
						<p>Je suis du très patient et à l'écoute des autres.</p>
					</div>
				</div>
			</section>
			<section class="parcours">
				<h2 class="titre">Parcours et expériences</h2>
				<div class="sec">
					<h3> Expériences professionnelles</h2>
					<div class="exp">
						<div class="left">
							<h4>2012 - 2012</h4>
						</div>
						<div class="right">
							<h4>Stagiaire</h4>
							<p>1 semaine de stage dans un laboratoire d'analyses et 2 jours en bloc opératoire à l'hôpital de Saintes.</p>
						</div>
						<div class="left">
							<h4>2014 - 2016</h4>
						</div>
						<div class="right">
							<h4>Commis de cuisine</h4>
							<p>Commis de cuisine en restauration japonaire à New Japan.</p>
						</div>
						<div class="left">
							<h4>2017 - 2017</h4>
						</div>
						<div class="right">
							<h4>Serveur</h4>
							<p>Serveur au restaurant Ginza à Mérignac. A temps plein</p>
						</div>
						<div class="left">
							<h4>2018 - 2019</h4>
						</div>
						<div class="right">
							<h4>Polyvalent cuisine</h4>
							<p>Commis de cuisine ainsi que plongeur au restaurant New Japan.</p>
						</div>
					</div>
					<h3>Parcours scolaire</h3>
					<div class="exp">
						<div class="left">
							<h4>2016 - 2017</h4>
						</div>
						<div class="right">
							<h4>PACES</h4>
							<p>Première année en médecine.</p>
						</div>
						<div class="left">
							<h4>2017 - 2018</h4>
						</div>
						<div class="right">
							<h4>Fac Info</h4>
							<p>Première année en MISIPCG.</p>
						</div>
						<div class="left">
							<h4>2018 - 2019</h4>
						</div>
						<div class="right">
							<h4>Ingésup</h4>
							<p>Première année à Ingésup.</p>
						</div>
					</div>
				</div>
			</section>
			<section class="competences">
				<h2 class="titre">Compétences et niveau</h2>
				<div class="sec">
					<div class="cleft">
						<div class="sous">
							<div class="sousleft"><h3>Compétences</h3></div>
							<div class="sousright"><h3>Niveaux</h3></div>
						</div>
						<div class="sous">
							<div class="sousleft"><p>HTML / CSS</p></div>
							<div class="sousright"><p>Intermédiaire</p></div>
						</div>
						<div class="sous">
							<div class="sousleft"><p>Javascript</p></div>
							<div class="sousright"><p>Basique</p></div>
						</div>
						<div class="sous">
							<div class="sousleft"><p>PHP / SQL</p></div>
							<div class="sousright"><p>Intermédiaire</p></div>
						</div>
					</div>
					<div class="cright">
						<div class="sous">
							<div class="sousleft"><h3>Compétences</h3></div>
							<div class="sousright"><h3>Niveaux</h3></div>
						</div>
						<div class="sous">
							<div class="sousleft"><p>Python</p></div>
							<div class="sousright"><p>Avancé</p></div>
						</div>
						<div class="sous">
							<div class="sousleft"><p>C / C++</p></div>
							<div class="sousright"><p>Intermédiaire</p></div>
						</div>
						<div class="sous">
							<div class="sousleft"><p>C#</p></div>
							<div class="sousright"><p>Avancé</p></div>
						</div>

					</div>
				</div>
			</section>
		</article>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>