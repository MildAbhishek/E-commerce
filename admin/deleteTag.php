<?php
include 'config.php';
$tag_id=$_POST['id'];

$sql = "DELETE FROM categories WHERE categoryId={$tag_id}";
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
?>