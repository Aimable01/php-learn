<!-- the backend code -->
<?php
include 'connection.php';
if(isset($_POST['update'])){
    $user_id = $_POST['id'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `users` SET 
           `fname` = '$first_name', `lname` = '$last_name',`email` = '$email', `password` = '$password', `gender` = '$gender'
           WHERE `id` = '$user_id'";
    
    $result = $conn->query($sql);

    if($result == true){
        echo 'Updated user successfully';
    }else{
        echo 'Error in updating user: '.$conn->connect_error;
    }
}    

if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `users` WHERE `id` = '$user_id'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $first_name = $row['fname'];
            $last_name = $row['lname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
            $user_id = $row['id']; 
        }
        ?>
        <html>
            <h3>Update user form</h3>
            <form action="" method="post">
        <fieldset>
            <legend>Personal information</legend>
            <input type="hidden" name="id" value="<?php echo $user_id ?>">
            First name:<br>
            <input type="text" name="firstname" id="" value='<?php echo $first_name ?>'><br>
            Last name:<br>
            <input type="text" name="lastname" id="" value='<?php echo $last_name ?>'><br>
            Email:<br>
            <input type="email" name="email" id="" value='<?php echo $email ?>'><br>
            Password:<br>
            <input type="password" name="password" id="" value='<?php echo $password ?>'><br>
            Gender:<br>
            <input type="radio" name="gender" value="Male" <?php if($gender == 'Male') {echo 'checked';} ?>>Male
            <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){echo 'checked';} ?>>Female<br>
            <input type="submit" name="update" value="update">
        </fieldset>
    </form>
        </html>
    
    <?php }else{
        header('Location: read.php');
         }
      }  
    ?>
