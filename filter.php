<?php
require 'admin/config.php';

if (isset($_POST['action'])) {
    $sql= "SELECT * FROM products where productCategory != '' ";

    if (isset($_POST['category'])) {
        $category = implode("','", $_POST['category']);
        $sql .="AND productCategory IN ('".$category."')";
    }

    if (isset($_POST['tag'])) {
        $tag = implode("','", $_POST['tag']);
        $sql .="AND productTag IN ('".$tag."')";
    }
    $result = $conn->query($sql);
    $output= '<ul class="aa-product-catg">';
    if ($result->num_rows>0) {

        while ($row=$result->fetch_assoc()) {
            $output .= '<li>
        <figure>
          <a class="aa-product-img" href="#"><img src="images/'.$row['productImage'].'" alt="Image Path is wrong"></a>
          <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
          <figcaption>
            <h4 class="aa-product-title"><a href="#">'.$row['productName'].'</a></h4>
            <span class="aa-product-price">'.$row['productPrice'].'</span><span class="aa-product-price"><del>$65.50</del></span>
            <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
          </figcaption>
        </figure>                         
        <div class="aa-product-hvr-content">
          <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
          <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
        </div>
        <!-- product badge -->
        <span class="aa-badge aa-sale" href="#">SALE!</span>
      </li>';
        }
    } else {
        $output = "<h3>No Products Found !!</h3>";
    }
    $output .= '</ul>';
    echo $output;
    
  
}
?>

