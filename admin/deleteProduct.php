<?php
 include 'config.php';
 $product_id=$_POST['pid'];

$sql = "DELETE FROM products WHERE productId={$product_id}";
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
?>