<?php
    //Get values pass from in login.php file
    $username = $_POST['user'];
    $password = $_POST['pass'];

    //to prevent mysql injection 
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    //connect to the server and select database 
    mysql_connect("localhost","root", "");
    mysql_select_db("login");

    //Query the database for user
    $result = mysql_query("select * from users where username = '$username' and password = '$password'")
                or die ("Failed to query database ".mysql_error());
    $row = mysql_fatch_arry($result);
    if ($row['username'] == $username && $row['password'] == $password){
        echo "Login success!!!  Welcome ".$row['username'];
    } else {
        echo "Faild to login!";
    }

// // Connect
// $link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
//     OR die(mysql_error());

// // Query
// $query = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'",
//             mysql_real_escape_string($user),
//             mysql_real_escape_string($password));

    

?>