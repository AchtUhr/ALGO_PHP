<?php
    
$capitales = ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome"];


function afficherTableHTML($arg) {
    
    foreach ($arg as $pays => $capitale) {
        $tableauMaj[strtoupper($pays)] = $capitale;
    }
    
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