<?php session_start()?><!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title> Mon CV en ligne</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale=1.0">
		<meta name="description" content="Présentation de Calvin Sea Phanh - CV">
		<link rel="stylesheet" href="../style.css">
	</head>
	<body>
		<?php 
			require_once '../database.php';
            require_once '../function.php';

            $qui = getObjet5($db, 1, $_GET['id']);
		 ?>
			<h1>Calvin Sea Phanh</h1>
		</header>
		<nav>
			<div class="table">
				<ul>
					<li class="menu-ind">
						<a href="../index.php">Accueil</a>
					</li>
					<li class="menu-exp">
						<a href="../projets.php">Projets</a>
					</li>
					<li class="menu-hob">
						<a href="../hobbies.php">Loisirs</a>
					</li>
					<li class="menu-con">
						<a href="../contact.php">Contactez-moi !</a>
					</li>
				</ul>
			</div>
		</nav>
		<h2 class="titre"><?= $qui->name ?></h2>
		<div class="sec">
			<div class="leftexp">
				<p>
			</div>
			<?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
			<div class="rightexp">
				<p><?= $qui->content ?></p>
				<a href="delete_qui.php?id=<?= $qui->id ?>"><p>Enlever</p>
				<a href="change_qui.php?id=<?= $qui->id ?>"><p>Modifier</p>
				<a href="../index.php"><p>Retour</p></a>
			</div>
		<?php endif ?>
		</div>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>