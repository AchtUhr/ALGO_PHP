<?php

$nomsInput = ["nom", "prénom", "email", "ville", "sexe"];
$formationsSelect = ["DL", "Designer Web", "Intégrateur", "Chef de projet"];

function formulaireComplet($nomsInput, $formationsSelect) {
    $res = "";

    $res.= "<form method='POST' action='#.php'>";
    foreach ($nomsInput as $nom) {
        $res.= "<label>$nom</label><input type='text' name='$nom'><br>";
    }

    $res.= "<label>Formations :</label><select>";

    foreach ($formationsSelect as $formation) {
        $res.= "<option value='$formation'>$formation</option>";
    }

    $res.= "</select></form>";
    $res.= "<input type='submit' value='Envoyer le formulaire'>";

    return $res;
}

echo formulaireComplet($nomsInput, $formationsSelect);
?>
