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
			<?php
			$req = $db->query('SELECT * FROM qui');
			$quis = $req->fetchAll();
			foreach ($quis as $qui): ?>
			<section class="presentation">
				<div class="sec">
					<h2 class="titre"><?= $qui['name'] ?></h2>
					<div class="left">
						<?php
						echo'
						<img src="images/'.$qui['upload'].'.jpg" alt="identité" />
						';
						?>
					</div>
					<div class="right">
						<p><?= $qui['content'] ?></p>
						<?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
					<a href="admin/change6.php?id=<?= $qui['id'] ?>">Modifier</a>
					<?php endif ?>
					</div>
				</div>
			</section>
		<?php endforeach?>
			<section class="parcours">
				<h2 class="titre">Parcours et expériences</h2>
				<div class="sec">
					<h3> Expériences professionnelles</h2>
						<?php
			$req = $db->query('SELECT * FROM parcours_et_expériences');
			$parcour_et_expériences = $req->fetchAll();
			foreach ($parcour_et_expériences as $parcours_et_expériences): ?>
					<div class="exp">
						<div class="left">
							<h4><?= $parcours_et_expériences['annee'] ?></h4>
						</div>
						<div class="right">
							<h4><?= $parcours_et_expériences['metier'] ?></h4>
							<p><?= $parcours_et_expériences['content'] ?></p>
							<?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
					<a href="admin/change7.php?id=<?= $parcours_et_expériences['id'] ?>">Modifier</a>
					<?php endif ?>
						</div>
					</div>
				<?php endforeach?>
					<h3>Parcours scolaire</h3>
					<?php
			$req = $db->query('SELECT * FROM parcours');
			$parcour = $req->fetchAll();
			foreach ($parcour as $parcours): ?>
					<div class="exp">
						<div class="left">
							<h4><?= $parcours['annee'] ?></h4>
						</div>
						<div class="right">
							<h4><?= $parcours['metier'] ?></h4>
							<p><?= $parcours['content'] ?></p>
							<?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
					<a href="admin/change5.php?id=<?= $parcours['id'] ?>">Modifier</a>
					<?php endif ?>
						</div>
					</div>
				<?php endforeach?>
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
						<?php
			$req = $db->query('SELECT * FROM competences_et_niveau');
			$competence_et_niveau = $req->fetchAll();
			foreach ($competence_et_niveau as $competences_et_niveau): ?>
					<div class="sous">
							<div class="sousleft"><p><?= $competences_et_niveau['competences'] ?></p></div>
							<div class="sousright"><p><?= $competences_et_niveau['niveaux'] ?></p></div>
							<?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
					<a href="admin/change4.php?id=<?= $competences_et_niveau['id'] ?>">Modifier</a>
					<?php endif ?>
						</div>
				<?php endforeach?>
					</div>
					<div class="cright">
						<div class="sous">
							<div class="sousleft"><h3>Compétences</h3></div>
							<div class="sousright"><h3>Niveaux</h3></div>
						</div>
						<?php
			$req = $db->query('SELECT * FROM competences');
			$competence = $req->fetchAll();
			foreach ($competence as $competences): ?>
					<div class="sous">
							<div class="sousleft"><p><?= $competences['name'] ?></p></div>
							<div class="sousright"><p><?= $competences['niveaux'] ?></p></div>
							<?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
					<a href="admin/change3.php?id=<?= $competences['id'] ?>">Modifier</a>
					<?php endif ?>
						</div>
				<?php endforeach?>
					</div>
				</div>
			</section>
		</article>
		<?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
		<a href="admin/ajouter_competence.php"><p>Ajouter compétence droite</p></a>
		<a href="admin/ajouter_competences.php"><p>Ajouter compétence gauche</p></a>
		<a href="admin/ajouter_parcour.php"><p>Ajouter Parcours</p></a>
		<a href="admin/ajouter_parcours.php"><p>Ajouter Expériences</p></a>
		<?php endif ?>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>