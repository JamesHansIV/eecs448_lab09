<?php

//echo start of table tag
echo "<table>";

//print table xaxis header
echo "<tr>";
echo "<th/>";
for($col = 1; $col < 11; $col ++) {
    echo "<th>$col</th>";
}
echo "</tr>";

//print rows
for($row = 1; $row < 11; $row++) {
    echo "<tr>";
    echo "<th>$row</th>";
    for($col = 1; $col < 11; $col++) {
        $val = $row * $col;
        echo "<td>$val</td>";
    }
    echo "</th>";
}

//echo end of table tag
echo "</table>";
?>