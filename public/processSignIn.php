<?php 
include '../services/myproteinService.php';






if ($_POST["submit"]) {
	$password = $_POST["password"];
	$email = $_POST["email"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["firstname"];
	$req = $bdd->prepare('INSERT INTO user(email, password, firstname, lastname) VALUES(:email, :password, :firstname, :lastname');

	$req->execute(array(

	    'email' => $email,

	    'password' => $password,

	    'firstname' => $firstname,

	    'lastname' => $lastname));
}
