<?php

function repeterImageV1($url, $repetition) {

    $resultat = "";

    for ($i = 0; $i < $repetition; $i++) {
        $resultat.= "<img src='$url' alt='doggy'>";
    }

    /* alternative avec "str_repeat(string $input, int $multiplier)"
    $resultat.= str_repeat("<img src='$url' alt='doggy'>", 4);
    */
    return $resultat;
}

function repeterImageV2($url, $repetition) {

    $resultat = "";
    
    // alternative avec "str_repeat(string $input, int $multiplier)"
    $resultat.= str_repeat("<img src='$url' alt='doggy'>", 4);
    
    return $resultat;
}

echo repeterImageV1("http://my.mobirise.com/data/userpic/764.jpg", 4);
?>
