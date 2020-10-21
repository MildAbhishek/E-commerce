<?php
/**
 * Templet File Doc Comment
 * 
 * PHP version /
 * 
 * @category Tenplete_Class
 * @package  Templete_Class
 * @author   Author <author@domain.com>
 * @license  http://opensource.org/MIT MIT License
 * @link     http://localhost/
 */

require "admin/config.php";

$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productImage = $_POST['productImage'];

//echo $productName;

$sql = "INSERT INTO carts(`productName`, `productPrice`, `productImage`)
VALUES ('".$productName."', '".$productPrice."', '".$productImage."')";
//echo $sql;
if ($conn->query($sql)===true) {
  echo 1;
} else {
  echo 0;
}

$conn->close();

?>