<?php
session_start();
require 'config.php';
require  'model/memberModel.php';

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $mdp = filter_input(INPUT_POST, "mdp", FILTER_SANITIZE_STRING);
    $isPosted = filter_has_var(INPUT_POST, "submit");
    $error = '';


if($isPosted) {
    $found = memberFound($email, $mdp);

        if ($found) {
            // Authentification de l'utilisateur après inscription
            $_SESSION["login"] = $email;
            $_SESSION["ip"] = $_SERVER["REMOTE_ADDR"];

            $message = 'Félicitations '. $email . ' vous êtes authentifié';


            $_SESSION["flash"] = $message;

            header("location:espace-membre.php");
        } else {
            $error = "Vos informations d'authentification sont incorrectes";
        }
    }




// Affichage HTML
require 'fragments/head.php';
require 'fragments/login.php';
require 'fragments/footer.php';
