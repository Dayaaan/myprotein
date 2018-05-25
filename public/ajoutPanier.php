<?php
session_start();
include '../services/tools.php';
include '../services/myproteinService.php';

if (isset($_GET["add"])) {

	$id = $_GET["add"];

	if(!isset($_SESSION['panier'])) {
		$_SESSION['panier'] = array(); 
	}
	array_push($_SESSION["panier"], $id);
	
	header("Location:panier.php");

}


