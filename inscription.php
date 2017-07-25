<?php
include_once "fonctions_utils.php";

//var_dump($_POST);

//Récupération des données
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$mdp = filter_input(INPUT_POST, "mdp", FILTER_SANITIZE_STRING);
$mdpConfirm = filter_input(INPUT_POST, "mdp-confirme", FILTER_SANITIZE_STRING);
$submit = filter_input(INPUT_POST, "submit", FILTER_DEFAULT);
$competences = filter_input(INPUT_POST, "competences", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY)??[];

//debug($competences, 2);
$erreurs = [];
$message = "";
$estSoumis = isset($submit);

//Si le formulaire est posté
if($estSoumis){
    //Validation des données
    if(! $email){
        $erreurs[] = "L'adresse email est invalide";
    }

    if(empty($mdp)){
        $erreurs[] =  "Le mot de passe est vide";
    } elseif($mdp != $mdpConfirm){
        $erreurs[] = "Le mot de passe et sa confirmation ne sont pas identiques";
    }

    //Traitement des données
    if(count($erreurs) == 0){
        $message = "Votre inscription est confirmée";

        // traitement de l'upload
        if(isset($_FILES["photo"])) {
            $mimeType = $_FILES["photo"]["type"];
            if($mimeType == "image/jpeg") {
                $message .= uploadFile($_FILES["photo"]);
            } else {
                $erreurs[] = "Vous ne pouvez charger que des fichiers jpeg";
            }
        }
        //TODO enregistrer l'inscription dans un fichier ou une base de données
    }
}

function uploadFile($upload) {
    $ext = 'jpg';
    $message = "fichier uploadé";

    $targetPath = getcwd().'/images/';
    //Attribution d'un nom unique au fichier
    $filePath = $targetPath.uniqid('image_').'.'.$ext;
    if (!move_uploaded_file($upload['tmp_name'], $filePath)) {
        $message = "Aucun fichier uploadé";
    }

    return "<br> $message";
}
?>

<!doctype html>

<html>

<head>
    <title>Formulaire age</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
</head>

<body>

<div>
    <?=$message?>
</div>

<!-- Affichage des erreurs -->
<?php if(count($erreurs)): ?>
<div>
    <ul>
        <?php foreach ($erreurs as $item): ?>
        <li><?= $item; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<?php if(! $estSoumis || count($erreurs)>0): ?>
<form method="post" enctype="multipart/form-data" novalidate>

    <label for="email">Votre Adresse email</label>
    <input type="email" id="email" name="email" value="<?= $email ?>"><br>

    <label for="mdp">Votre mot de passe</label>
    <input type="password" id="mdp" name="mdp"><br>

    <label for="mdp-confirme">Confirmation du mot de passe</label>
    <input type="password" id="mdp-confirme" name="mdp-confirme"><br>

    <div>
        <h3>Vos compétences</h3>

        <input type="checkbox" name="competences[]" value ="Java" id="java">
        <label for="java">Java</label><br>

        <input type="checkbox" name="competences[]" value ="PHP" id="php">
        <label for="php">PHP</label><br>

        <input type="checkbox" name="competences[]" value="Python" id="python">
        <label for="python">Python</label><br>
    </div>

    <div>
        <input type="file" name="photo">
    </div>

    <button type="submit" name="submit">Valider</button>
</form>
<?php endif; ?>

</body>

</html>