<?php
require ('connection.php');

try {
 $order_number = (isset($_GET['id']) ? $_GET['id'] : '');
 $stmt = $conn->prepare("UPDATE ordered_items SET stats='CANCELLED' WHERE id='$order_number'");
 
 $stmt->execute();
} 
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
    echo "<script>window.open('inventory.php', '_self')</script>";


?>
