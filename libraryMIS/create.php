<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entry_time = $_POST["entry_time"];
    $days = $_POST["days"];
    $week = $_POST["week"];
    $description = $_POST["activity_description"];
    $working_hour = $_POST["working_hour"];

    $sql = "INSERT INTO logbook_entries (entry_time, days, week,activity_description,working_hour) VALUES ('$entry_time', '$days', '$week','$description','$working_hour')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add log book</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Add Log Book</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="entryDate">Entry date:</label>
                <input type="date" class="form-control" id="entryDate" name="date" required>
            </div>
            <div class="form-group">
                <label for="entry_time">Entry time:</label>
                <input type="text" class="form-control" id="entry_time" name="entry_time" required>
            </div>
            <div class="form-group">
                <label for="days">Days:</label>
                <input type="number" class="form-control" id="days" name="days" required>
            </div>
            <div class="form-group">
                <label for="week">Week:</label>
                <input type="number" class="form-control" id="week" name="week" required>
            </div>
            <div class="form-group">
                <label for="activity_description">Activity description:</label>
                <input type="text" class="form-control" id="name" name="activity_description" required>
            </div>
            <div class="form-group">
                <label for="working_hour">Working hour</label>
                <input type="text" class="form-control" id="working_hour" name="working_hour" required>
            </div>
            <div class="form-group">
                <label for="date">Created at:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>
