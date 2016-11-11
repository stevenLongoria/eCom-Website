<?php

	include("includes/connectDB.php");
 
		if(isset($_GET['product_edit'])){
	
			$get_id = $_GET['product_edit'];
			
			$get_product = "select * from products where product_id = '$get_id'";
	
				$run_product = mysqli_query($connection, $get_product);
									
				$i = 0;
								  
				$row_product=mysqli_fetch_array($run_product);
									
				$product_id = $row_product['product_id'];
				$product_name = $row_product['product_name'];
				$product_description = $row_product['product_description'];
				$product_category = $row_product['product_category'];
				$product_sku = $row_product['product_sku'];
				$product_stock = $row_product['product_stock'];
				$product_cost = $row_product['product_cost'];
				$product_price = $row_product['product_price'];
				$product_sale = $row_product['product_sale'];
				$product_image = $row_product['product_img_url'];
				$product_star = $row_product['product_star_url'];
									
									
		} /*END IF*/
						
	include 'includes/header.php';
	
	include_once("includes/analytics_tracking.php");
	 
 
?>

<div class="container"> 
	<div class="modal-body" id="productEdit">
		<div class="row">
			<div class="col-xs-6">           
				<h2>Edit and Update</h2>             
					<div class="well">
						<form method="post" action="">
                            <div class="form-group">
                              <label for="username" class="control-label">Product name</label>
                              <input type="text" class="form-control" name="product_name" value="<?php echo $product_name; ?>"/> 
                              <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                              <label for="description" class="control-label">Description</label>
                              <input type="text" class="form-control" name="product_description" value="<?php echo $product_description; ?>"/>
                              <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                              <label for="category" class="control-label">Category</label>
                              <input type="text" class="form-control" name="product_category" value="<?php echo $product_category; ?>"/>
                              <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                              <label for="sku" class="control-label">Sku</label>
                              <input type="text" class="form-control" name="product_sku" value="<?php echo $product_sku; ?>"/>
                              <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                              <label for="stock" class="control-label">Stock</label>
                              <input type="text" class="form-control" name="product_stock" value="<?php echo $product_stock; ?>"/>
                              <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                              <label for="cost" class="control-label">Cost</label>
                              <input type="text" class="form-control" name="product_cost" value="<?php echo $product_cost; ?>"/>
                              <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                              <label for="price" class="control-label">Price</label>
                              <input type="text" class="form-control" name="product_price" value="<?php echo $product_price; ?>"/>
                              <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                              <label for="sale" class="control-label">Sale</label>
                              <input type="text" class="form-control" name="product_sale" value="<?php echo $product_sale; ?>"/>
                              <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                              <label for="image" class="control-label">Image</label>
                              <input type="text" class="form-control" name="product_img_url" value="<?php echo $product_image; ?>"/>
                              <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                              <label for="reviews" class="control-label">Reviews</label>
                              <input type="text" class="form-control" name="product_star_url" value="<?php echo $product_star; ?>"/>
                              <span class="help-block"></span>
                            </div>      
                            <input type="submit" class="btn btn-success btn-block" name="product_update" value="Update Products" />
					</form>
				</div><!--END WELL-->
			</div><!--END COL-->
		</div><!--END ROW-->
	</div><!--END PRODUCT EDIT--> 
</div>

<?php

if(isset($_POST['product_update'])) {
							
	$update_id = $product_id;
	
	$product_name = $_POST['product_name'];
	$product_description = $_POST['product_description'];
	$product_category = $_POST['product_category'];
	$product_sku = $_POST['product_sku'];
	$product_stock = $_POST['product_stock'];
	$product_cost = $_POST['product_cost'];
	$product_price = $_POST['product_price'];
	$product_sale = $_POST['product_sale'];
	$product_image = $_POST['product_img_url'];
	$product_star = $_POST['product_star_url'];
	
	//Updates table data
	
	$sql = "update products set product_name='$product_name', 
	product_description='$product_description', 
	product_category='$product_category', 
	product_sku='$product_sku', 
	product_stock='$product_stock', 
	product_cost='$product_cost', 
	product_price='$product_price', 
	product_sale='$product_sale', 
	product_img_url='$product_image', 
	product_star_url='$product_star' where product_id='$update_id'"; 
	
	$run_product = mysqli_query($connection, $sql);
	
	echo "working!";
	
	
		 } 
		 
	else {
		
		echo "not-submitted";
		
		}
										
?>