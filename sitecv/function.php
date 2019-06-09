<?php

function getObjet($db, $nb = null, $id = null){
	if ($nb && !$id) {
		$req = $db->query('SELECT * FROM hobbie LIMIT'.$nb);
		$hobbies = $req->fetchAll();
	}elseif($id){
		$req = $db->query('SELECT * FROM hobbie WHERE id ='.$id);
		$hobbies = $req->fetchObject();
	}else{
		$req = $db->query('SELECT * FROM hobbie');
		$hobbies = $req->fetchAll();
	}
	return $hobbies;
}

function getObjet2($db, $nb = null, $id = null){
	if ($nb && !$id) {
		$req = $db->query('SELECT * FROM projet LIMIT'.$nb);
		$hobbies = $req->fetchAll();
	}elseif($id){
		$req = $db->query('SELECT * FROM projet WHERE id ='.$id);
		$hobbies = $req->fetchObject();
	}else{
		$req = $db->query('SELECT * FROM projet');
		$hobbies = $req->fetchAll();
	}
	return $hobbies;
}