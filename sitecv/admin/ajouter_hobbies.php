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

            if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
            	header('location:../index.php');
            }

            if(isset($_POST) && !empty($_POST)) {
            	if (true) {
            		$req = $db->prepare('INSERT INTO hobbie (id, name, content, upload, alt, couleur) VALUES (:id, :name, :content, :upload, :alt, :couleur)');
            		$req->execute([
            			'id' => $_POST['id'],
            			'name' => $_POST['name'],
            			'content' => $_POST['content'],
            			'upload' => $_POST['upload'],
            			'alt' => $_POST['alt'],
            			'couleur' => $_POST['couleur'],
            		]);
            		$_SESSION['flash']['success'] = 'Hobbie changé';
            	}else{
            		$_SESSION['flash']['error'] = 'Problème survenu';
            	}
            }
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
		<h2> Ajouter hobbie</h2>
		<form method="POST">
			<h4> ID: </h4>
			<input type="text" name="id"/>
			<h4> Nom: </h4>
			<input type="text" name="name"/>
			<h4> Contenu </h4>
			<input type="text" name="content"/>
			<h4> Changement d'image </h4>
			<input type="text" name="upload"/>
			<h4> Alt </h4>
			<input type="text" name="alt"/>
			<h4> Couleur </h4>
			<input type="text" name="couleur"/>
			<button>Ajouter</button>
		</form>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>