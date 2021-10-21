<?php
require_once ('connection.php');

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $itemName = $_POST["food"];
$itemQuantity = $_POST["quantity"];
$itemPrice = $_POST["price"];
$itemCategory = $_POST["categories"];

$fileName = $_FILES['filename']['name'];
$fileTempLoc = $_FILES['filename']['tmp_name'];
$fileType = $_FILES['filename']['type'];
$fileError = $_FILES['filename']['error'];
$fileSize = $_FILES['filename']['size'];
$fileNameTime = time().''.$fileName;

$target = 'image/'. $fileNameTime;

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'gif');

$msg = '';

if(in_array($fileActualExt, $allowed)){
  if($fileError === 0){
    if(move_uploaded_file($fileTempLoc, $target)){
      $msg = 'Item is uploaded to breakfast';
      if($itemCategory == 'breakfast'){
        $stmt = $conn->prepare("INSERT INTO breakfast_table (item_name, display, item_quantity, item_price)
        VALUES (:item_name, :display, :item_quantity, :item_price)");
        $stmt->bindParam(":item_name", $itemName);
        $stmt->bindParam(":display", $fileNameTime);
        $stmt->bindParam(":item_quantity", $itemQuantity);
        $stmt->bindParam(":item_price", $itemPrice);
        $stmt->execute();
     }
      if($itemCategory == 'lunchmeal'){
        $stmt = $conn->prepare("INSERT INTO lunchmeal_table (item_name, display, item_quantity, item_price)
        VALUES (:item_name, :display, :item_quantity, :item_price)");
        $stmt->bindParam(":item_name", $itemName);
        $stmt->bindParam(":display", $fileNameTime);
        $stmt->bindParam(":item_quantity", $itemQuantity);
        $stmt->bindParam(":item_price", $itemPrice);
        $stmt->execute();
      }
      if($itemCategory == 'beverage'){
          $stmt = $conn->prepare("INSERT INTO beveragedrinks_table (item_name, display, item_quantity, item_price)
          VALUES (:item_name, :display, :item_quantity, :item_price)");
          $stmt->bindParam(":item_name", $itemName);
          $stmt->bindParam(":display", $fileNameTime);
          $stmt->bindParam(":item_quantity", $itemQuantity);
          $stmt->bindParam(":item_price", $itemPrice);
          $stmt->execute();
      }
      if($itemCategory == 'add-ons'){
          $stmt = $conn->prepare("INSERT INTO addons_table (item_name, display, item_quantity, item_price)
          VALUES (:item_name, :display, :item_quantity, :item_price)");
          $stmt->bindParam(":item_name", $itemName);
          $stmt->bindParam(":display", $fileNameTime);
          $stmt->bindParam(":item_quantity", $itemQuantity);
          $stmt->bindParam(":item_price", $itemPrice);
          $stmt->execute();
      }
    }
  }else{
    echo '<script>alert("file error")</script>';

  }
}else{
  echo '<script>alert("File type is not valid. Select a valid file (JPG JPEG PNG GIF)")</script>';
}

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();

}

echo "<script>window.open('item.php', '_self');</script>";
?>