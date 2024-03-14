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
    <a class="btn btn-info" href="form.html"><br><br>Back</a>
    <a href="read.php"><br><br>View record from database</a>
</html>    

<!--?php
#  learning
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO 
                users(name,password)
            VALUES 
                ('$name','$password')";
    
    $result = $conn->$sql;
    if($result){
        echo 'Inserted successfully';
    }else{
        echo 'error: '.$conn->error;
    }
    $conn->close();
}
?-->