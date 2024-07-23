<?php
include 'db.php';
include_once 'index.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];

    $sql = "DELETE FROM employees WHERE employee_id='$employee_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="post" action="delete.php">
    Employee ID: <input type="text" name="employee_id"><br>
    <input type="submit" value="Delete">
</form>
