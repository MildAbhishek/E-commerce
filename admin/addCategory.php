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

$categoryId = $_POST['categoryId'];
$categoryName = $_POST['categoryName'];
//echo $categoryId;

$sql = "INSERT INTO categories(`categoryId`, `categoryName`)
VALUES ('".$categoryId."', '".$categoryName."')";
//echo $sql;
if ($conn->query($sql)===true) {
  echo 1;
} else {
  echo 0;
}

$conn->close();

?>