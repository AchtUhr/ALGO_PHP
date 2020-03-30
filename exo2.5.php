<?php
$nomsInput = ["Nom", "Prénom", "Ville"];
function afficherInput($arg) {

    $resultat = "";
    $resultat.= "<form>";
    foreach ($arg as $value) {
        $resultat.= "<label>$value<br><input type='text' name='$value' id='$value'></label><br>";
    }
    $resultat.= "</form>";
    return $resultat;
}

echo afficherInput($nomsInput);
?>
