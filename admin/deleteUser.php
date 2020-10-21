<?php
include 'config.php';
$user_id=$_POST['id'];

$sql = "DELETE FROM users WHERE userId={$user_id}";
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
?>