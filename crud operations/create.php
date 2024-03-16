<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    # mysql query
    $sql = "INSERT INTO 
                 users(fname, lname, email, password, gender) 
            VALUES
                ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);
    
    if($result == true) {
        echo 'New record created successfully';
    }else{
        echo 'Error: '.$sql.'<br>'.$conn->error;
    }
    $conn->close();
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <br>
        <a class="btn btn-info" href="form.html">Back</a><br>
        <a class="btn btn-info" href="read.php">View record from database</a>
    </body>
</html>    