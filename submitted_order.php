<?php
require ('connection.php');

try {

  $total = $_POST['total-purchase'];
  $prices = $_POST['prices'];
  $food = $_POST['foods'];
  $stats = 'SUCCESS';
  $quantity = $_POST['quantity'];
  $dateTime = $_POST['hour'];
  $date = date("Y/m/d");

  // $data = $_POST;
  // echo "<pre>";
  // print_r($data);

  $total = array();

  foreach ($prices as $key=>$price) {
    $total[] = $price * $quantity[$key];
}
// print_r($total);
  

$count = count($food);
  for($i=0; $i<$count; $i++){
    $stmt = $conn->prepare("INSERT INTO ordered_items (date_current, hourly_sales, item, quantity_sold, total_purchase, stats)
    VALUES (:date_current, :hourly_sales, :item, :quantity_sold, :total_purchase, :stats)");

    $stmt->execute(array(":date_current"=>$date, ":hourly_sales"=>$dateTime, ":item"=>$food[$i], ":quantity_sold"=>$quantity[$i], ":total_purchase"=>$total[$i], ":stats"=>$stats));
  
  
  }



} catch(PDOException $e) {
  // echo $sql . "<br>" . $e->getMessage();

}

  echo "<script>window.open('index.php', '_self');</script>";
?>