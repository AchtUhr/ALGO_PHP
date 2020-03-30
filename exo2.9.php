<?php
$nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];

function afficherRadio($nomsRadio) {

    $resultat = "";

    $resultat.= "<form>";

    foreach($nomsRadio as $valeur) {
        $resultat.= "<label>$valeur</label><input type='radio' name='titreCivil' value='$valeur'><br>";
    }

    $resultat.= "</form>";
    return $resultat;
}

echo afficherRadio($nomsRadio);
?>
