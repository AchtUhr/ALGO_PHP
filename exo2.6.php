<?php
$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($arg) {

$i = 0;
    foreach ($arg as $value) {
        
        $select[$i] = "<option value='$value'>$value</option><br>";
        $i++;
    }
    return $select;
}

echo "<form>
        <select>";
echo("alimenterListeDeroulante($elements)");
echo "  </select>
    </form>";


?>
