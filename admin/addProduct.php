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

require "config.php";

$productId = $_POST['productId'];
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
//$productImage = $_POST['productImage'];
$productCategory = $_POST['productCategory'];
$productTag = $_POST['productTag'];
$shortDescription = $_POST['shortDescription'];
$longDescription = $_POST['longDescription'];
//echo $productTag;

$sql = "INSERT INTO products (`productId`, `productName`, `productPrice`, `productCategory`, `productTag`, `shortDescription`, `longDescription`)
VALUES ('".$productId."', '".$productName."', '".$productPrice."', '".$productCategory."', '".$productTag."', '".$shortDescription."', '".$longDescription."')";
//echo $sql;
if ($conn->query($sql)===true) {
  echo "1";
} else {
  echo "0";
}

$conn->close();

?>