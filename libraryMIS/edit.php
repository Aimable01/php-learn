<?php
include 'database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM logbook_entries WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entry_time = $_POST["entry_time"];
    $days = $_POST["days"];
    $week = $_POST["week"];
    $description = $_POST["activity_description"];
    $working_hour = $_POST["working_hour"];

    $sql = "UPDATE logbook_entries SET entry_time='$entry_time', days='$days', week='$week',activity_description='$description',working_hour='$working_hour' WHERE id=$id";
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
    <title>Edit Log Book</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Edit log book</h2>
        <form method="post" action="">
            
            <div class="form-group">
                <label for="entryDate">Entry date:</label>
                <input type="date" class="form-control" id="entryDate" name="entry_date" value="<?php echo $row['entry_date']; ?>" required>
            </div>
            <div class="form-group">
                <label for="entry_time">Entry time:</label>
                <input type="text" class="form-control" id="entry_time" name="entry_time" value="<?php echo $row['entry_time']; ?>" required>
            </div>
            <div class="form-group">
                <label for="days">Days:</label>
                <input type="number" class="form-control" id="days" name="days"  value="<?php echo $row['days']; ?>" required>
            </div>
            <div class="form-group">
                <label for="week">Week:</label>
                <input type="number" class="form-control" id="week" name="week"   value="<?php echo $row['week']; ?>" required>
            </div>
            <div class="form-group">
                <label for="activity_description">Activity description:</label>
                <input type="text" class="form-control" id="name" name="activity_description"   value="<?php echo $row['activity_description']; ?>" required>
            </div>
            <div class="form-group">
                <label for="working_hour">Working hour</label>
                <input type="text" class="form-control" id="working_hour"  name="working_hour" value="<?php echo $row['working_hour']; ?>" required>
            </div>
            <div class="form-group">
                <label for="date">Created at:</label>
                <input type="date" class="form-control" id="created_at" name="created_at" value="<?php echo $row['created_at']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
