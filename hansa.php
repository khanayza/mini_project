<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "coffeeshop";

// Connect to database
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['name'];
    $e = $_POST['email'];
    $x = $_POST['number'];
    $z = $_POST['date'];

    $sql = "INSERT INTO orderdetails (name, email, number, date) VALUES ('$n','$e','$x','$z')";
    $stmt=mysqli_query($conn,$sql);

    if ($stmt) {
        echo "Message submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

