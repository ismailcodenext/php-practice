<?php 

    // for ($i=1; $i<=10; $i++) {
    //     if($i<10)
    //     echo "$i-";
    //     else
    //     echo "$i". "\n"; 

    // }

    // $sum = 0;
    // for ($i=0; $i <= 30; $i++ ){
    //    $sum+= $i;
    // //    echo "Total : . $sum";
    // }
    
    // echo $sum; 


    // for ($i=0; $i <= 5; $i++ ){
    //     for($j=0; $j < $i; $j++){
    //         echo "*";
    //     }
    //     echo "<br>";
    // }

    // function fname(){
    //     $a = 10;
    //     $b = 20;
    //     $c = $a + $b;

    //     echo $c;

    // }
    // fname();

    // function fname($a, $b){
    //     echo $a + $b;
    // }

    // fname(10,5);

    ///associative array
    
    // $color = [ "red", "green", "white"];

    // echo "<pre>";
    // var_dump($color);
    // echo "</pre>";



    ///php foreach
    // $color = [ "red", "green", "blue"];

    // foreach($color as $value){
    //     echo $value . "<br>";
    // }

    //foreach with key value

    // $age = [ "rahim" => 25,
    //         "karim" => 30,
    //         "kashem" => 28,
    // ];

    // foreach($age as $key => $value)
    // {
    //     echo  "$key = $value <br>";
    // }

    //Multidimantional Array

    $emp = [
            [1, "Rahim", "Manager", 30000],
            [2, "Korim", "Salesman", 20000],
            [3, "Jobbar", "Computer Operator", 25000],
            [4, "Kashem", "Accounts", 28000],
    ];

    for ($row=0; $row< 4; $row++){
        for($col=0; $col <4; $col++){
            echo $emp[$row][$col]. " ";
        }
        echo "<br>";
    }

    echo "<pre>";
    var_dump($emp);
    echo "</pre>";

    
?>