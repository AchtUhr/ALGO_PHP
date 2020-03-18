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
                </tr>
            </thead>
            <tbody>";
    
    foreach ($tableauTrie as $pays => $capitale) {
    echo"<tr>
            <td>$pays</td>
            <td>$capitale</td>
        </tr>";
                
            }
    echo "</tbody>
        </table>";
}

afficherTableHTML($capitales);
    ?>