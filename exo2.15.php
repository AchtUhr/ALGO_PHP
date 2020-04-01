<?php

$adresseCorrecte = "elan@elan-formation.fr";
$adresseIncorrecte = "contact@elan";

function checkFormatEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // filter_var -> filtre une variable avec un filtre spécifique
        return "Format d'email valide<br>";
    } else {
        return "Format d'email invalide<br>";
    }
}

echo checkFormatEmail($adresseCorrecte);
echo checkFormatEmail($adresseIncorrecte);