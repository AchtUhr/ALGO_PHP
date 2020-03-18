<?php
$elements = ["Choix 1"=>false,
             "Choix 2"=>false, 
             "Choix 3"=>false];

function genererCheckbox($arg) {

    echo "<form>";
    foreach ($arg as $value) {
        echo "<input type='radio';
    }
    echo "</form>";
}

genererCheckbox($elements); // 
?>
