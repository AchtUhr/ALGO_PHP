<?php
    
$capitales = ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome"];


function maj($arg) {
    foreach ($arg as $pays => $capitale) {
        $pays = strtoupper($pays);
        $maj[$pays] = $capitale;
    }
    return $maj;
}

function afficherTableHTML($arg) {
        
    $tableauMaj = maj($arg);
    ksort($tableauMaj);

    $resultat = ""; 
 
    $resultat.= "<table>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                </tr>
            </thead>
            <tbody>";
    
    foreach ($tableauMaj as $pays => $capitale) {
    $resultat.="<tr>
            <td>$pays</td>
            <td>$capitale</td>
        </tr>";
     }

    $resultat.= "</tbody>
        </table>";

    return $resultat;
}

echo afficherTableHTML($capitales);
    ?>