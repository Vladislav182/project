<?php
// db.php
$servername = "localhost";
$username = "Barber shop";
$password = "";


// Create database connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=barber_shop", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>