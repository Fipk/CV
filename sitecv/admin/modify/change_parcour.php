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

            $parcour = getObjet6($db, 1, $_GET['id']);

            if (!isset($_GET['id'])) {
            	header('location:../../index.php');
            }
            if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
            	header('location:../../index.php');
            }

            if(isset($_POST) && !empty($_POST)) {
            	if (!empty($_POST['metier']) && !empty($_POST['annee']) && !empty($_POST['content'])) {
            		$req = $db->prepare('UPDATE parcours SET metier = :metier, annee = :annee, content = :content WHERE id = :id');
            		$req->execute([
            			'metier' => $_POST['metier'],
            			'annee' => $_POST['annee'],
            			'content' => $_POST['content'],
            			'id' => $_GET['id'],
            		]);
            		$_SESSION['flash']['success'] = 'Hobbie changé';
            		header('location:../../index.php');
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
		<h2> Modifier Parcours</h2>

		<form method="POST">
			<h4> Nom: </h4>
			<input type="text" name="metier" value="<?= $parcour->metier ?>"/>
			<h4> Contenu </h4>
			<input type="text" name="content" value="<?= $parcour->content ?>" />
			<h4> Annee </h4>
			<input type="text" name="annee" value="<?= $parcour->annee ?>" />
			<button>Modifier</button>
		</form>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>