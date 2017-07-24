<!doctype html>

<html>

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
</head>

<body>
    <?php 
        $now = date("d/m/Y");
        $fruit = "pomme";

        if(isset($_GET["nom"]) && !empty($_GET["nom"])) {
            $nom = $_GET["nom"];
        } else {
            $nom = "inconnu";
        }

        echo "Bonjour $nom nous sommes le $now";
        echo "<br>il ya des {$fruit}s";
    ?>
    <?php
        echo "<pre>";
        var_dump($_SERVER);
        echo "</pre>";
    ?>
</body>

</html>