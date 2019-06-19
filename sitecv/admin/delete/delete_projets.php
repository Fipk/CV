<?php
session_start();
require_once '../../database.php';

if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {

	if (isset($_GET['id'])) {
		$req = $db->query('SELECT * FROM projet WHERE id = '.$_GET['id']);
		$projet = $req->fetch();
		if ($projet){
			$req = $db->query('DELETE FROM projet WHERE id = '.$_GET['id']);
			header('location:../../index.php');
		}
		else{
			header('location:../../index.php');
		}
	}
}else{
	header('location:../../index.php');
}