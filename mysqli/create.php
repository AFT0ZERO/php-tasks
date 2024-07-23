<?php
include 'db.php';
include_once 'index.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $department_id = $_POST['department_id'];
    $salary = $_POST['salary'];
    $manager_id = $_POST['manager_id'];

    $sql = "INSERT INTO employees (first_name, last_name, department_id, salary, manager_id)
            VALUES ('$first_name', '$last_name', '$department_id', '$salary', '$manager_id')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!-- <form method="post" action="create.php">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    Department ID: <input type="text" name="department_id"><br>
    Salary: <input type="text" name="salary"><br>
    Manager ID: <input type="text" name="manager_id"><br>
    <input type="submit" value="Submit">
</form> -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Employee</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Create New Employee</h2>
    <form method="post" action="create.php">
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
