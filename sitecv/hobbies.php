<?php session_start()?><!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title> Mon CV en ligne</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale=1.0">
			<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php 
			require_once 'database.php';
		 ?>
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
					</li>
				</ul>
			</div>
		</nav>
		<?php
			$req = $db->query('SELECT * FROM hobbie');
			$hobbies = $req->fetchAll();
			foreach ($hobbies as $hobbie): ?>

		<?php echo'<section class="'.$hobbie['couleur'].'">';?>
			<h2 class="titre"><?= $hobbie['name'] ?></h2>
			<div class="sec">
				<div class="leftexp">
					<?php
					echo'
					<img src="images/'.$hobbie['upload'].'.jpg" alt="'.$hobbie['alt'].'" />
					';
					?>
				</div>
				<div class="rightexp">
					<p><?= $hobbie['content'] ?></p>
					<?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
					<a href="admin/change.php?id=<?= $hobbie['id'] ?>">Modifier</a>
					<?php endif ?>
				</div>
			</div>
		</section>
		<?php endforeach ?>
		<?php if(isset($_SESSION['admin']) && !empty($_SESSION['admin'])): ?>
		<a href="admin/ajouter_hobbies.php"><p>Ajouter</p></a>
		<?php endif ?>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>