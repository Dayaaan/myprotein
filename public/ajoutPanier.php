<?php
session_start();
include '../services/tools.php';
include '../services/myproteinService.php';

$id = $_GET['id'];
$_SESSION["panier"][] = $id;


pre($_SESSION);