
<?php
$servername = "sql312.infinityfree.com";
$username = "if0_36160132";
$password = "quy19092003";
$database = "if0_36160132_test_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
