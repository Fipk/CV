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
			require_once '../database.php';
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
		<?php
		if (isset($_POST) AND !empty($_POST)) {
			if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) {
				$req = $db->prepare('SELECT * FROM test2 WHERE username = :username AND password = :password');
				$req->execute([
					'username' => $_POST['username'],
					'password' => $_POST['password']
				]);
				$user = $req->fetchObject();
				if ($user) {
					$_SESSION['admin'] = $_POST['username'];
					header('location:../index.php');
				}else{
					$error = 'Mauvais identifiant';
				}
			}
			else{
				$error = "Veuillez à remplir tous les champs !";
			}
		}
		if (isset($error)){
			echo $error;
		}
		?>
		<h2> Se connecter:</h2>
		<form action="login.php" method="POST">
			<input type="text" name="username"/>
			<input type="password" name="password"/>
			<button>Se connecter</button>
		</form>
		<footer>
			<p>Copyright 2019 Calvin Sea Phanh - Toute reproduction interdite</p>
		</footer>
	</body>
</html>