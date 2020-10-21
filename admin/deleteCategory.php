<?php
include 'config.php';
$category_id=$_POST['id'];

$sql = "DELETE FROM categories WHERE categoryId={$category_id}";
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
?>