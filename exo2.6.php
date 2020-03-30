<?php
$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($arg) {

    $resultat = "";
    $resultat.= "<form>
            <select>";
    
    foreach ($arg as $value) {
        
        $resultat.= "<option value='$value'>$value</option><br>";
    }

    $resultat.= "</select>
    </form>";

    return $resultat;
}

echo alimenterListeDeroulante($elements);

?>
