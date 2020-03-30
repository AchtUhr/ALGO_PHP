<?php
$elements = ["Choix 1"=>"unchecked",
             "Choix 2"=>"checked", 
             "Choix 3"=>"unchecked"];

function genererCheckbox($arg) {

    $resultat = "";
    $resultat.= "<form>";
    foreach ($arg as $choix => $check) {
        $resultat.= "<label for='$choix'>$choix</label><input type='checkbox' $check><br>"; 
    }
    $resultat.= "</form>";
    return $resultat;
}
echo genererCheckbox($elements);
?>
