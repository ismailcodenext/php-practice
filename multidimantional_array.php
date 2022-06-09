<?php


$emp = [
    [1, "Rahim", "Manager", 30000],
    [2, "Korim", "Salesman", 20000],
    [3, "Jobbar", "Computer Operator", 25000],
    [4, "Kashem", "Accounts", 28000],
];

echo "<table border= '2px', cellpadding= '5px' cellspacing = '0'>";

foreach($emp as $value1){
    echo "<tr>"; 
    foreach($value1 as $value2){
        echo "<td> $value2</td>";
    }
    
    echo "</tr>";
}

echo "</table>";


?>













<!-- echo "<table border='2px' cellpadding= '5px' cellspacing='0'>";
echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Desination</th>
<th>Sallary</th>
</tr>";
foreach($emp as $value1){
    echo "<tr>";
    foreach($value1 as $value2){
        echo "<td> $value2 </td>";
    }
    echo "</tr>"; 
}
echo "</table>";  -->