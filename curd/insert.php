<?php 
$conn =mysqli_connect('localhost', 'root', '', 'student_reg');
$sql = "SELECT * FROM student_details";
$result = mysqli_query($conn, $sql);

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
            <a class="btn btn-primary text-white text-center mt-4" href="index.php">Student List</a>
        </div>
        <div class="col-md-9">
            <h2 class="mb-3">Add New Student</h2>
            <form action="store.php" method="POST">
                <div class="form-group">
                    <label for="name">Name : </label>
                    <input type="text" class="form-control" name="name" placeholder="Student Name">
                </div>
                <div class="form-group">
                    <label for="name">Age : </label>
                    <input type="text" class="form-control" name="age" placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="name">Address : </label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="name">Mobile : </label>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                </div></br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>