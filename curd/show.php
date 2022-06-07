<?php 
$id= $_GET['id'];
$conn =mysqli_connect('localhost', 'root', '', 'student_reg');
$sql = "SELECT * FROM student_details WHERE id = $id";
$result = mysqli_query($conn, $sql);

$std = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud System</title>
</head>
<body>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-3">
            <a class="btn btn-primary text-white text-center mt-4" href="index.php">Students List</a>
        </div>
        <div class="col-md-9">
            <h2 class="mb-3">Student Information</h2>
            <table class="table">
                <tr>
                    <th width="100" class="text-right">Name : </th>
                    <td><?php echo $std['name'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right">Age : </th>
                    <td><?php echo $std['age'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right">Address : </th>
                    <td><?php echo $std['address'];?></td>
                </tr>
                <tr>
                    <th width="100" class="text-right">Mobile : </th>
                    <td><?php echo $std['Mobile'];?></td>
                </tr>

            </table>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>