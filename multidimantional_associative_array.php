<?php

$marks = [ 
        "Rahim" => [ 
            "Bangla" => 70,
            "English" => 80,
            "Math" => 85
        ],

        "Karim" => [
            "Bangla" => 85,
            "English" => 60,
            "Math" => 90,
        ],

        "Jobbar" => [
            "Bangla" => 95,
            "English" => 75,
            "Math" => 80
        ]
];

echo "<table border='2px' cellpading= '5px' cellspacing = '0'>";
echo "<tr>
        <th>Student Name</th>
        <th>Bangla</th>
        <th>English</th>
        <th>Math</th>
    </tr>";
foreach($marks as $key => $value1){
    echo "<tr>
           <td>$key</td>";

    foreach($value1 as $value2){
        echo "<td> $value2 </td>";
    }
    
    echo "</tr>";
}

echo "</table>";

echo "<pre>";
print_r($marks);
echo "</pre>";


?>