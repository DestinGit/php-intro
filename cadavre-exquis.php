<?php

$nom = [
    "le chien",
    "le chat",
    "mon ami",
    "le développeur",
    "le chef de projet",
    "le client",
    "le formateur",
    "le gateau",
    "l'ordinateur",
    "la voiture",
    "le vélo",
    "le médecin",
    "l'enfant",
    "le graphiste",
    "l'oiseau",
    "le programme",
    "le jeu",
    "l'oiseau",
    "le bébé",
    "la soupe",
    "l'artiste",
    "le ministre",
    "le président",
    "le concierge",
    "le cheval"
];

$verbe = [
    "mange",
    "regarde",
    "code",
    "fabrique",
    "admire",
    "aime",
    "déteste",
    "rencontre",
    "examine",
    "évalue",
    "percute",
    "ausculte",
    "dessine",
    "brocarde",
    "exécute",
    "lance",
    "gratte",
    "chatouille",
    "touche",
    "frappe",
    "menace",
    "cajole",
    "interpelle",
    "insulte"

];

$complement = [
    "dans la voiture",
    "avec lenteur",
    "sur la tour Eiffel",
    "dans la cabane",
    "pour avoir une bonne note",
    "pour la bonne raison",
    "avec rapidité",
    "aujourd'hui",
    "sans hésitation",
    "dans son bureau",
    "avec détermination",
    "en plein jour",
    "la nuit",
    ""
];

//echo base_convert ('ABC10FF00ADE' , 16 , 32 );
?>

<?php
for($i = 0; $i < 20; ++$i) :
    $phrase = $nom[array_rand($nom)] . ' ' . $verbe[array_rand($verbe)] . ' '  . $nom[array_rand($nom)] . ' '  . $complement[array_rand($complement)];
?>
    <h2 style="border: 1px solid brown"><?=$phrase?></h2>
<?php endfor;?>