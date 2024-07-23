<?php
include 'db.php';
include_once 'index.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department_id = $_POST['department_id'];
    $salary = $_POST['salary'];
    $manager_id = $_POST['manager_id'];

    $sql = "UPDATE employees SET first_name='$first_name', last_name='$last_name', department_id='$department_id', salary='$salary', manager_id='$manager_id' WHERE employee_id='$employee_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Employee</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Update Employee Info</h2>
    <form method="post" action="update.php">
    <div class="form-group">
            <label for="employee_id">Employee ID</label>
            <input type="text" class="form-control" id="employee_id" name="employee_id" required>
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="department_id">Department ID</label>
            <input type="text" class="form-control" id="department_id" name="department_id" required>
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" class="form-control" id="salary" name="salary" required>
        </div>
        <div class="form-group">
            <label for="manager_id">Manager ID</label>
            <input type="text" class="form-control" id="manager_id" name="manager_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

