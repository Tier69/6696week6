<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=dog", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "เชื่อมต่อข้อมูลสำเร็จจ้า";
} catch(PDOException $e) {
  echo "การเชื่อมต่อมีปัญหาจ้า: " . $e->getMessage();
}
?>