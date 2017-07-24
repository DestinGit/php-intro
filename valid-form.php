<?php
//var_dump($_POST);
$validEmail = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
if($validEmail)
    $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
echo "$email <br>";
$mdp = filter_input(INPUT_POST, 'mdp',FILTER_SANITIZE_STRING);

$mdpConfirm = filter_input(INPUT_POST, 'mdp-confirm',FILTER_SANITIZE_STRING);
if ($mdp === $mdpConfirm) {
    echo " MDP : passord correct";
} else {
    echo " MDP : mawa trooop";
}