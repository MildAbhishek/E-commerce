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
//echo "addProductsHere";
include ('header.php');
include ('sidebar.php');
include ('config.php');
?>

<div id="main-content"> <!-- Main Content Section with everything -->
    <noscript> <!-- Show a notification if the user has disabled javascript -->
        <div class="notification error png_bg">
            <div>
		        Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
            </div>
        </div>
    </noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			
			
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Add</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div>
						<div id="producttable">
						<table>
								<tr>
									<td><input type="checkbox" /></td>
									<td>Lorem ipsum dolor</td>
									<td><a href="#" title="title">Sit amet</a></td>
									<td>Consectetur adipiscing</td>
									<td>Donec tortor diam</td>
									<td>Donec tortor diam</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
									</td>
								</tr>
							</tbody>
							
						</table>
						</div>
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<form action="#" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
							    <p>
									<label>Enter Product Id</label>
										<input class="text-input small-input" type="text" id="productId" name="productId" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
										<br /><small>A small description of the field</small>
                                </p>

								<p>
									<label>Enter Product Name</label>
										<input class="text-input small-input" type="text" id="productName" name="productName" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
										<br /><small>A small description of the field</small>
                                </p>
                                
                                <p>
									<label>Enter Product Price</label>
										<input class="text-input small-input" type="text" id="productPrice" name="productPrice" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
										<br /><small>A small description of the field</small>
                                </p>
                                
                                <p>
									<label>Image</label>
										<input class="text-input small-input" type="file" id="productImage" name="productImage" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
										<br /><small>A small description of the field</small>
								</p>
								
								<p>
									<label>Category</label>              
									<select name="dropdown" id="productCategory" class="small-input">
										<option value="men">Men</option>
										<option value="women">Women</option>
										<option value="kids">Kids</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="sports">Sports</option>
									</select> 
								</p>
                                
                                <p>
									<label>Tags</label>
                                    <input type="checkbox" name="fashion" id="fashion"/> Fashion <input type="checkbox" name="ecommerce" id="ecommerce"/> E-Commerce
                                    <input type="checkbox" name="shop" id="shop"/> Shop  <input type="checkbox" name="handbag" id="handbag"/> Handbag
                                    <input type="checkbox" name="laptop" id="laptop"/> Laptop <input type="checkbox" name="headphone" id="headphone"/> Headphone
								</p>
								

								<p>
									<label>Enter Short Description</label>
									<textarea class="text-input textarea wysiwyg" id="shortDescription" name="short-description" cols="79" rows="15"></textarea>
								</p>

								<p>
									<label>Enter Long Description</label>
									<textarea class="text-input textarea wysiwyg" id="longDescription" name="long-description" cols="79" rows="15"></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" id="submit" value="Submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script>
			$(document).ready(function(){
				function showProduct(){
					$.ajax({
						url: "showProduct.php",
						type: "POST",
						success: function(data){
							$("#producttable").html(data);
						}
					});
				}
				showProduct();


				$("#submit").on('click', function(e){
					//alert("Hii..");
					e.preventDefault();
					var productId= $("#productId").val();
					var productName=$("#productName").val();
					var productPrice=$("#productPrice").val();
					var productImage=$("#productImage").val();
					var productCategory=$("#productCategory").val();
					var productTag=$("#productTag").val();
					var shortDescription=$("#shortDescription").val();
					var longDescription=$("#longDescription").val();

					//document.write(productId);
					$.ajax({
						url:"addProduct.php",
						type:"POST",
						data:{
							productId : productId,
							productName : productName,
							productPrice : productPrice,
							//productImage : productImage,
							//productCategory : productCategory,
							//productTag : productTag,
							shortDescription : shortDescription,
							longDescription : longDescription
						},
						success : function(data){
							//document.write(data);
							//alert(data);
							if(data=="1") {
								alert("Success");
								showProduct();
							} else {
								alert("Error");
							}

						}
					})
				});
			});
			</script>
			
			
			<div class="clear"></div>
			
			
			<!-- Start Notifications -->
			<!--
			<div class="notification attention png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
				</div>
			</div>
			
			<div class="notification information png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
            -->
			<!-- End Notifications -->
			<?php include 'footer.php' ?>;
