<?php
require ('connection.php');

try {
  $sql = "TRUNCATE TABLE `ordered_items`";
 
  //Prepare the SQL query.
  $statement = $conn->prepare($sql);
   
  //Execute the statement.
  $statement->execute();
} 
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
  echo "<script>window.open('inventory.php', '_self')</script>";
 
?>
