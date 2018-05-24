<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=myprotein;charset=utf8', 'root', 'troiswa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$bdd->exec('SET NAMES UTF8');
}
catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
}
