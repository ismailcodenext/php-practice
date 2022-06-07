<?php
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];

$conn = mysqli_connect('localhost', 'root', '', 'student_reg');
$sql = "INSERT INTO student_details VALUES(NULL, '$name', '$age', '$address', '$mobile')";
if(mysqli_query($conn, $sql)){
    header("Location: index.php");
}else{
    echo "Not Inserted";
}


?>