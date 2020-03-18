<?php
$nomsInput = ["Nom", "Prénom", "Ville"];
function afficherInput($arg) {

    echo "<form>";
    foreach ($arg as $value) {
        echo "<label>$value<br><input type='text' name='$value' id='$value'></label><br>";
    }
    echo "</form>";
}

afficherInput($nomsInput);
?>
