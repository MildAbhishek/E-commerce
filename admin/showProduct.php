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
//echo "Hii..";
require 'config.php';

$sql= "SELECT * FROM products";
$result=$conn->query($sql);
$html="";
if ($result->num_rows>0) {
$html='<table id="producttable">
<thead>
    <tr>
        <th>Select</th>
        <th>Id</th>
        <th>Name</th>
        <th>Picture</th>
        <th>Price</th>
        <th>Short Description</th>
        <th>Long Description</th>
        <th>Action</th>
    </tr>
</thead>
                     
<tfoot>
    <tr>
        <td colspan="6">
            <div class="bulk-actions align-left">
                <select name="dropdown">
                    <option value="option1">Choose an action...</option>
                    <option value="option2">Edit</option>
                    <option value="option3">Delete</option>
                </select>
                <a class="button" href="#">Apply to selected</a>
            </div>
                                    
            <div class="pagination">
                <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                <a href="#" class="number" title="1">1</a>
                <a href="#" class="number" title="2">2</a>
                <a href="#" class="number current" title="3">3</a>
                <a href="#" class="number" title="4">4</a>
                <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
            </div> <!-- End .pagination -->
            <div class="clear"></div>
        </td>
    </tr>
</tfoot>
<tbody>';
    while ($row = $result->fetch_assoc()) {
        $html .="
            <tr>
            <td><input type='checkbox' /></td>
            <td>{$row["productId"]}</td>
            <td>{$row["productName"]}</td>
            <td><a href='#' title='Edit'><img src='../images/{$row["productImage"]}' style='height:20px; width:100px;' alt='Edit' /></a></td>
            <td>{$row["productPrice"]}</td>
            <td>{$row["shortDescription"]}</td>
            <td>{$row["longDescription"]}</td>
            
            <td>
                <!-- Icons -->
                <a href='#' title='Edit'><img src='resources/images/icons/pencil.png' alt='Edit' /></a>
                <a href='#' title='Delete'><img class='del-product'  data-pid='{$row["productId"]}' src='resources/images/icons/cross.png' alt='Delete' /></a> 
                 <a href='#' title='Edit Meta'><img src='resources/images/icons/hammer_screwdriver.png' alt='Edit Meta' /></a>
            </td>
        </tr>";
    }
    $html.='<tbody></table>';
}
mysqli_close($conn);
echo $html;
?>

