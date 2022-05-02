<?php
$servername = "localhost";
$username = "root";
$password = "Hjarta123!";
$database = "db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$click1 = $_POST['click'];
$color1 = $_POST['color'];

echo $click1;

$sql = "INSERT INTO evaluation (click, color) VALUES ($click1,'$color1');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
