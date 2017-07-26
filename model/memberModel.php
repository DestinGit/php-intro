<?php
/**
 * @param $mdp
 * @param $valid
 * @param $email
 * @return bool
 */
function memberFound($email, $mdp=null): bool {
    $mdp = sha1($mdp);
    // Récupération de la liste des membres
    $membres = json_decode(file_get_contents("data/membres.json"), true);

    $found = false;

    for ($i = 0; $i < count($membres) && !$found; $i++) {
        $value = $membres[$i];

        if(!isset($mdp)) {
            $found = $mdp == $value["pass"] && $email == $value["email"];
        } else {
            $found = $email == $value["email"];
        }
    }
    return $found;
}


/**
 * @param $email
 * @param $mdp
 * @param $nomImage
 * @param $membres
 * @param $message
 */
function createNewMember($email, $mdp, $nomImage, $membres, $message)
{
// Création d'un nouveau membre
    $nouveauMembre = [
        "email" => $email,
        "pass" => sha1($mdp),
        "photo" => $nomImage ?? null
    ];

    // Ajout du nouveau membre au tableau
    $membres[] = $nouveauMembre;

    // Enregistrement du tableau sérialisé dans le fichier json
    file_put_contents("data/membres.json", json_encode($membres));

    // Authentification de l'utilisateur après inscription
    $_SESSION["login"] = $email;
    $_SESSION["ip"] = $_SERVER["REMOTE_ADDR"];


    $_SESSION["flash"] = $message;
    header("location:espace-membre.php");
}

