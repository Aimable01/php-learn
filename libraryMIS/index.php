<?php
require_once "database.php";
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container" id="header">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>

    <!-- view logboks -->
    <div class="container">
        <h2 class="mt-5">Log book List</h2>
        <a href="create.php" class="btn btn-primary mb-3">Add New Log Book</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Entry date</th>
                    <th>Entry time</th>
                    <th>Days</th>
                    <th>Week</th>
                    <th>Description</th>
                    <th>Working hour</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM logbook_entries";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['entry_date']}</td>
                                <td>{$row['entry_time']}</td>
                                <td>{$row['days']}</td>
                                <td>{$row['week']}</td>
                                <td>{$row['activity_description']}</td>
                                <td>{$row['working_hour']}</td>
                                <td>{$row['created_at']}</td>
                                <td>
                                    <a href='edit.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                                    <a href='delete.php?id={$row['id']}' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No logs found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>