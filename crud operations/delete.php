<!-- the backend codes -->
<?php
include 'connection.php';
$user_id = $_GET['id'];

$sql = "DELETE FROM `users` WHERE `id` = '$user_id'";
$result = $conn->query($sql);

if($result == true){
    echo "Deleted user successfully";
}else{
    exit('Error in deleting the user: '.$conn->connect_error);
}