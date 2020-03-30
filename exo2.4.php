<?php
$capitales = ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome"];

function afficherTableHTML($tableau) {
    ksort($tableau);

    $resultat = ""; 

    $resultat.= "<table>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                            <th>Lien Wiki</th>
                        </tr>
                    </thead>
                    <tbody>";
    
    foreach ($tableau as $pays => $capitale) {

    $resultat.="<tr>
                    <td>" . mb_strtoupper($pays) . "</td>
                    <td>$capitale</td>
                    <td><a href='https://fr.wikipedia.org/wiki/" . $pays . "' action='_blank'>Lien</a></td>
                </tr>";  
                
    }
    $resultat.= "</tbody>
        </table>";
    
    return $resultat;
}

echo afficherTableHTML($capitales);
?>