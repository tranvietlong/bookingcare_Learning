<?php
$servername = "localhost";
$username = "demo";
$password = "long123";
$table = "medkee";

$conn = new mysqli($servername, $username, $password, $table); 

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}else {
echo "Kết nối thành công";
}
?>

