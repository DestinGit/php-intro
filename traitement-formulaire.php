<?php
if($_POST) {
    $message = '';
    // récupérer les données
    $age = $_POST["age"] ?? null;
//    $age = intval($age);
    
    // Valider les données
    if($age == null) {
        $message .= "Vous devez passer par le formulaire";
    } elseif(!is_numeric($age)) {
        $message = "Vous devez saisir un nombre";
    }
    
    $valid = empty($message);
    if($valid) {
        $message = $age < 18 ? "Mineur":"Majeur";
    }
    echo $message;
}