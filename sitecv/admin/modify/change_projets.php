<?php session_start()?><!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title> Mon CV en ligne</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale=1.0">
		<meta name="description" content="Présentation de Calvin Sea Phanh - CV">
		<link rel="stylesheet" href="../../style.css">
	</head>
	<body>
		<?php 
			require_once '../../database.php';
            require_once '../../function.php';

            $projet = getObjet2($db, 1, $_GET['id']);

            if (!isset($_GET['id'])) {
            	header('location:../../index.php');
            }
            if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
            	header('location:../../index.php');
            }

            if(isset($_POST) && !empty($_POST)) {
            	if (!empty($_POST['name']) && !empty($_POST['content']) && !empty($_POST['upload']) && !empty($_POST['alt']) && !empty($_POST['couleur']) && !empty($_POST['adresse'])) {
            		$req = $db->prepare('UPDATE projet SET name = :name, content = :content, upload = :upload, alt = :alt, couleur = :couleur, adresse = :adresse WHERE id = :id');
            		$req->execute([
            			'name' => $_POST['name'],
            			'content' => $_POST['content'],
            			'upload' => $_POST['upload'],
            			'alt' => $_POST['alt'],
            			'couleur' => $_POST['couleur'],
            			'adresse' => $_POST['adresse'],
            			'id' => $_GET['id'],
            		]);
            		$_SESSION['flash']['success'] = 'Projet changé';
            		header('location:../../projets.php');
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
						<a href="../../index.php">Accueil</a>
					</li>
					<li class="menu-exp">
						<a href="../../projets.php">Projets</a>
					</li>
					<li class="menu-hob">
						<a href="../../hobbies.php">Loisirs</a>
					</li>
					<li class="menu-con">
						<a href="../../contact.php">Contactez-moi !</a>
					</li>
				</ul>
			</div>
		</nav>
		<h2> Modifier Projet</h2>

		<form method="POST">
			<h4> Nom: </h4>
			<input type="text" name="name" value="<?= $projet->name ?>"/>
			<h4> Contenu </h4>
			<input type="text" name="content" value="<?= $projet->content ?>" />
			<h4> Changement d'image </h4>
			<input type="text" name="upload" value="<?= $projet->upload ?>"/>
			<h4> Alt </h4>
			<input type="text" name="alt" value="<?= $projet->alt ?>"/>
			<h4> Couleur </h4>
			<input type="text" name="couleur" value="<?= $projet->couleur ?>"/>
			<h4> Adresse </h4>
			<input type="text" name="adresse" value="<?= $projet->adresse ?>"/>
			<button>Modifier</button>
		</form>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>