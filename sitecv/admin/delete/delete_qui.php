<?php
session_start();
require_once '../../database.php';

if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {

	if (isset($_GET['id'])) {
		$req = $db->query('SELECT * FROM qui WHERE id = '.$_GET['id']);
		$hobbie = $req->fetch();
		if ($hobbie){
			$req = $db->query('DELETE FROM qui WHERE id = '.$_GET['id']);
			header('location:../../index.php');
		}
		else{
			header('location:../../index.php');
		}
	}
}else{
	header('location:../../index.php');
}