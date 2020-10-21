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

$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userPassword = $_POST['userPassword'];
//echo $userEmail;

$sql = "INSERT INTO users(`userName`, `userEmail`, `userPassword`)
VALUES ('".$userName."', '".$userEmail."', '".$userPassword."')";
//echo $sql;
if ($conn->query($sql)===true) {
  echo 1;
} else {
  echo 0;
}

$conn->close();

?>