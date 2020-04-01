<?php


function formaterDateFr($date) {
    setlocale(LC_TIME, "fr_FR"); // pour avoir la date en Français
    return strftime("%A %d %B %G", strtotime($date)); 
}

echo formaterDateFr("2020-03-27");
?>
