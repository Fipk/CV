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

            $qui = getObjet6($db, 1, $_GET['id']);

            if (!isset($_GET['id'])) {
            	header('location:../index.php');
            }
            if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
            	header('location:../index.php');
            }

            if(isset($_POST) && !empty($_POST)) {
            	if (!empty($_POST['name']) && !empty($_POST['content']) && !empty($_POST['upload'])) {
            		$req = $db->prepare('UPDATE qui SET name = :name, content = :content, upload = :upload WHERE id = :id');
            		$req->execute([
            			'name' => $_POST['name'],
            			'upload' => $_POST['upload'],
            			'content' => $_POST['content'],
            			'id' => $_GET['id'],
            		]);
            		$_SESSION['flash']['success'] = 'Hobbie changé';
            		header('location:../index.php');
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
		<h2> Modifier Qui</h2>

		<form method="POST">
			<h4> Nom: </h4>
			<input type="text" name="name" value="<?= $qui->name ?>"/>
			<h4> Contenu </h4>
			<input type="text" name="content" value="<?= $qui->content ?>" />
			<h4> Image </h4>
			<input type="text" name="upload" value="<?= $qui->upload ?>" />
			<button>Modifier</button>
		</form>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>