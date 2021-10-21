<?php
require ('connection.php');

try {
 $id = (isset($_GET['id']) ? $_GET['id'] : '');
 $stmt = $conn->prepare("DELETE FROM breakfast_table WHERE item_num='$id'");
 $stmt->execute();
} 
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
    echo "<script>window.open('item.php', '_self')</script>";
?>