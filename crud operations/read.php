<!-- the backend query -->
<?php
include 'connection.php';

$query = "SELECT * FROM users";
$result = $conn->query($query);
?>

<!-- the html table -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>View page</title>
</head>
<body>
    <div class='container'>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['fname'] ?></td>
                    <td><?php echo $rows['lname'] ?></td>
                    <td><?php echo $rows['email'] ?></td>
                    <td><?php echo $rows['gender'] ?></td>
                    <td>
                        <a class="btn btn-info" href="update.php?id=<?php echo $rows['id']; ?>">Update</a>&nbsp;
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $rows['id'] ?>">Delete</a>
                    </td>
                </tr>        
                <?php
                    }
                 }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>