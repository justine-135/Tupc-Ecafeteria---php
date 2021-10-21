<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tupc_ecafe";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
  $sql = "CREATE TABLE ordered_items (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    day_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    day_current VARCHAR(30) NOT NULL,
    hourly_sales VARCHAR(30) NOT NULL,
    item VARCHAR(100) NOT NULL,
    quantity_sold INT(11) NOT NULL,
    total_purchase INT(11) NOT NULL,
    stats VARCHAR(10) NOT NULL

    )";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>