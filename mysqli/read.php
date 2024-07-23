<?php
include 'db.php';
include_once 'index.php';
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Department ID</th>
    <th>Salary</th><th>Manager ID</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["employee_id"]."</td>
        <td>".$row["first_name"]."</td>
        <td>".$row["last_name"]."</td>
        <td>".$row["department_id"]."</td>
        <td>".$row["salary"]."</td>
        <td>".$row["manager_id"]."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
