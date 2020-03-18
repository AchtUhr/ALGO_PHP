<?php
$capitales = ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome"];


function triage($arg) {
    foreach ($arg as $pays => $capitale) {
        $pays = strtoupper($pays);
        $maj[$pays] = $capitale;
    }
    ksort($maj);
    return $maj;
}

function afficherTableHTML($arg) {
        
    $tableauTrie = triage($arg);

    echo "<table>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                    <th>Lien Wiki</th>
                </tr>
            </thead>
            <tbody>";
    
    foreach ($tableauTrie as $pays => $capitale) {

    echo"<tr>
            <td>$pays</td>
            <td>$capitale</td>
            <td><a href='https://fr.wikipedia.org/wiki/" . strtolower($pays) . "' action='_blank'>Lien</a></td>
        </tr>";  // Le lien nécessite que le nom du pays soit en minuscule
                
    }
    echo "</tbody>
        </table>";
}

afficherTableHTML($capitales);
?>