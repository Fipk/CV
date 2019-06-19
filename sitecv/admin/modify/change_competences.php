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

            $competences = getObjet3($db, 1, $_GET['id']);

            if (!isset($_GET['id'])) {
            	header('location:../../index.php');
            }
            if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
            	header('location:../../index.php');
            }

            if(isset($_POST) && !empty($_POST)) {
            	if (!empty($_POST['competences']) && !empty($_POST['niveaux'])) {
            		$req = $db->prepare('UPDATE competences_et_niveau SET competences = :competences, niveaux = :niveaux WHERE id = :id');
            		$req->execute([
            			'competences' => $_POST['competences'],
            			'niveaux' => $_POST['niveaux'],
            			'id' => $_GET['id'],
            		]);
            		$_SESSION['flash']['success'] = 'Hobbie changé';
            		header("Location:../../index.php");
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
		<h2> Modifier competence</h2>

		<form method="POST">
			<h4> Nom: </h4>
			<input type="text" name="competences" value="<?= $competences->competences ?>"/>
			<h4> Niveaux </h4>
			<input type="text" name="niveaux" value="<?= $competences->niveaux ?>" />
			<button>Modifier</button>
		</form>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>