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

            $hobbie = getObjet($db, 1, $_GET['id']);

            if (!isset($_GET['id'])) {
            	header('location:../../index.php');
            }
            if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
            	header('location:../../index.php');
            }

            if(isset($_POST) && !empty($_POST)) {
            	if (!empty($_POST['name']) && !empty($_POST['content']) && !empty($_POST['upload']) && !empty($_POST['alt']) && !empty($_POST['couleur'])) {
            		$req = $db->prepare('UPDATE hobbie SET name = :name, content = :content, upload = :upload, alt = :alt, couleur = :couleur WHERE id = :id');
            		$req->execute([
            			'name' => $_POST['name'],
            			'content' => $_POST['content'],
            			'upload' => $_POST['upload'],
            			'alt' => $_POST['alt'],
            			'couleur' => $_POST['couleur'],
            			'id' => $_GET['id'],
            		]);
            		$_SESSION['flash']['success'] = 'Hobbie changé';
            		header('location:../../hobbies.php');
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
		<h2> Modifier hobbie</h2>

		<form method="POST">
			<h4> Nom: </h4>
			<input type="text" name="name" value="<?= $hobbie->name ?>"/>
			<h4> Contenu </h4>
			<input type="text" name="content" value="<?= $hobbie->content ?>" />
			<h4> Changement d'image </h4>
			<input type="text" name="upload" value="<?= $hobbie->upload ?>"/>
			<h4> Alt </h4>
			<input type="text" name="alt" value="<?= $hobbie->alt ?>"/>
			<h4> Couleur </h4>
			<input type="text" name="couleur" value="<?= $hobbie->couleur ?>"/>
			<button>Modifier</button>
		</form>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>