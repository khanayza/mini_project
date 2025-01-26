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

// Delete record if ID is provided
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM orderdetails WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID specified.";
}

$conn->close();
header("Location: admin.php"); // Redirect back to admin panel
exit;
?>