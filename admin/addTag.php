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

$tagId = $_POST['tagId'];
$tagName = $_POST['tagName'];
//echo $categoryId;

$sql = "INSERT INTO tags(`tagId`, `tagName`)
VALUES ('".$tagId."', '".$tagName."')";
//echo $sql;
if ($conn->query($sql)===true) {
  echo 1;
} else {
  echo 0;
}

$conn->close();

?>