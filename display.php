<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo "First Name: " . $row['first_name'] . "<br>";
    echo "Last Name: " . $row['last_name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Password: " . $row['password'] . "<br><br>";
}

$conn->close();
?>
