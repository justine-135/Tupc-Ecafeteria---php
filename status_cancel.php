<?php
require ('connection.php');

try {
  $zero = 0;
 $order_number = (isset($_GET['order_number']) ? $_GET['order_number'] : '');
 $stmt = $conn->prepare("UPDATE ordered_items SET stats='CANCELLED', quantity_sold=$zero, total_purchase=$zero WHERE id='$order_number'");
 
 $stmt->execute();
} 
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
    echo "<script>window.open('inventory.php', '_self')</script>";

?>
