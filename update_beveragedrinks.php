<?php
require("connection.php");
try{
    $itemName = $_POST['food'];
    $itemQuantity = $_POST['quantity'];
    $itemPrice = $_POST['price'];
    $itemNum = $_POST['itemNum'];

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

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if(move_uploaded_file($fileTempLoc, $target)){
                $stmt = $conn->prepare("UPDATE beveragedrinks_table SET item_name = :item_name,
                display = :display, item_quantity = :item_quantity, item_price = :item_price  WHERE item_num = '$itemNum'");
                $stmt->bindparam(':item_name', $itemName);
                $stmt->bindparam(':display', $fileNameTime);
                $stmt->bindparam(':item_quantity', $itemQuantity);
                $stmt->bindparam(':item_price', $itemPrice);

                $stmt->execute();
                }
        }else{
            echo 'Error present';
        }
    }else{
        echo 'File type not valid';
    }

    
} 
catch(PDOExeception $e) {
    $error = $e->getMessage();
    echo '<script>alert("'.$error.'");</script>';
}
    echo "<script>window.open('item.php', '_self')</script>";
?>