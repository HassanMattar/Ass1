<?php

$cars = array(
    "Toyota" => ['MADE' => "china", "COLOR" => "green", "YEAR" => "1999", "ENGINE_CC" => "2001"],
        "BMW" => ['MADE' => "gaza", "COLOR" => "red", "YEAR" => "2005", "ENGINE_CC" => "2006"],
        "Sports Car" => ['MADE' => "cairo", "COLOR" => "blue", "YEAR" => "1998", "ENGINE_CC" => "2007"],
        "Kia" => ['MADE' => "gaza", "COLOR" => "red", "YEAR" => "2008", "ENGINE_CC" => "2000"]
);

echo "<table border='1px'><thead>
<th>Name</th>
<th>Made</th>
<th>Color</th>
<th>Year</th>
<th>Engine_cc</th>
</thead>
<tbody>
";
for (reset($cars); $k = key($cars); next($cars)) {
    echo "<tr><td>$k</td>";
    for (reset($cars[$k]); $kk = key($cars[$k]); next($cars[$k])) {
        echo "<td>".$cars[$k][$kk]."</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";

?>
