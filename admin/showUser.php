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

$sql= "SELECT * FROM users";
$result=$conn->query($sql);
$html="";
if ($result->num_rows>0) {
$html='<table id="usertable">
<thead>
    <tr>
        <th>Select Box</th>
        <th>userId</th>
        <th>userName</th>
        <th>userEmail</th>
        <th>userPassword</th>
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
        <td>{$row["userId"]}</td>
        <td>{$row["userName"]}</td>
        <td>{$row["userEmail"]}</td>
        <td>{$row["userPassword"]}</td>
        
        
        <td>
            <!-- Icons -->
            <a href='#' title='Edit'><img src='resources/images/icons/pencil.png' alt='Edit' /></a>
            <a href='#' title='Delete'><img class='del-category'  data-pid='{$row["userId"]}' src='resources/images/icons/cross.png' alt='Delete' /></a> 
             <a href='#' title='Edit Meta'><img src='resources/images/icons/hammer_screwdriver.png' alt='Edit Meta' /></a>
        </td>
    </tr>";
}
    $html.='<tbody></table>';
}
$conn->close();
echo $html;
?>

