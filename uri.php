<!DOCTYPE html>
<html>
<body>


<?php

//    $value = date('F', time());
//    $month = "February";
   
//   if($value == $month){
//       echo "It's August, so it's really hot.";
//   }else{
//     echo "Not August, so at least not in the peak of the heat.";
//   }
//   ;

$mark = 60;

if($mark >= 80 && $mark == 100 ){
    echo "The Gread is : A+";
}elseif($mark >= 70){
    echo "The Gread is : A";
}elseif($mark >= 60){
    echo "The Gread is : A-";
}
else
echo "Fail";

?>


</body>
</html>