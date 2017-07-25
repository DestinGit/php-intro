<?php

var_dump($_POST);

//Récupération de l'âge
$age = $_GET["age"]?? null;
$message = "";

//Validation des données
if(! isset($age)){
    $message = "Vous devez passer par la saisie du formulaire";
} elseif (! is_numeric($age)){
    $message = "Vous devez saisir un nombre";
}

$valid = empty($message);

//Traitement des données
if($valid){
    $message = $age<18?"mineur":"majeur";
}

//Affichage 
echo $message;

