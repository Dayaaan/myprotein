<?php 
session_start();
include '../services/myproteinService.php';

if ($_POST["submit"]) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $strUser = '';

    $sql = "SELECT * FROM user WHERE email LIKE '$email' AND password LIKE '$password'";



    $statement = $bdd->prepare($sql);
    $statement->execute();
    $user = $statement->fetch();

    if ($user == null) {
        echo "L'utilisateur $email n'existe pas et/ou le mot de passe n'est pas bon";

    } else {
            $_SESSION['id'] = $user['id'];

            $_SESSION['firstname'] = $user['firstname'];

           header("Location:home.php");
    }
}
