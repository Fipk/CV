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

function getObjet5($db, $nb = null, $id = null){
	if ($nb && !$id) {
		$req = $db->query('SELECT * FROM qui LIMIT'.$nb);
		$hobbies = $req->fetchAll();
	}elseif($id){
		$req = $db->query('SELECT * FROM qui WHERE id ='.$id);
		$hobbies = $req->fetchObject();
	}else{
		$req = $db->query('SELECT * FROM qui');
		$hobbies = $req->fetchAll();
	}
	return $hobbies;
}

function getObjet3($db, $nb = null, $id = null){
	if ($nb && !$id) {
		$req = $db->query('SELECT * FROM competences_et_niveau LIMIT'.$nb);
		$hobbies = $req->fetchAll();
	}elseif($id){
		$req = $db->query('SELECT * FROM competences_et_niveau WHERE id ='.$id);
		$hobbies = $req->fetchObject();
	}else{
		$req = $db->query('SELECT * FROM competences_et_niveau');
		$hobbies = $req->fetchAll();
	}
	return $hobbies;
}
function getObjet4($db, $nb = null, $id = null){
	if ($nb && !$id) {
		$req = $db->query('SELECT * FROM parcours_et_expériences LIMIT'.$nb);
		$hobbies = $req->fetchAll();
	}elseif($id){
		$req = $db->query('SELECT * FROM parcours_et_expériences WHERE id ='.$id);
		$hobbies = $req->fetchObject();
	}else{
		$req = $db->query('SELECT * FROM parcours_et_expériences');
		$hobbies = $req->fetchAll();
	}
	return $hobbies;
}

function getObjet6($db, $nb = null, $id = null){
	if ($nb && !$id) {
		$req = $db->query('SELECT * FROM parcours LIMIT'.$nb);
		$hobbies = $req->fetchAll();
	}elseif($id){
		$req = $db->query('SELECT * FROM parcours WHERE id ='.$id);
		$hobbies = $req->fetchObject();
	}else{
		$req = $db->query('SELECT * FROM parcours');
		$hobbies = $req->fetchAll();
	}
	return $hobbies;
}

function getObjet7($db, $nb = null, $id = null){
	if ($nb && !$id) {
		$req = $db->query('SELECT * FROM competences LIMIT'.$nb);
		$hobbies = $req->fetchAll();
	}elseif($id){
		$req = $db->query('SELECT * FROM competences WHERE id ='.$id);
		$hobbies = $req->fetchObject();
	}else{
		$req = $db->query('SELECT * FROM competences');
		$hobbies = $req->fetchAll();
	}
	return $hobbies;
}