<?php
include_once 'psl-config.php';   // As functions.php is not included

	try {
		$bdd = new PDO('mysql:host=localhost; dbname=secure_login; charset=utf8', 'root', '');
	}
	catch(Exception $e) {
		die ('Erreur : '.$e->getMessage());
	}