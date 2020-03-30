<?php

$texte ="Mon texte en paramètre";

function convertirMajRouge($arg) {
    return "<p style='color:red'>".mb_strtoupper($arg)."</p>";
}
echo convertirMajRouge($texte);
?>
