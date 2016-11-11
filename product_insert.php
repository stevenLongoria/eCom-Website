<?php 

	include 'includes/header.php';
	
	include_once("includes/analytics_tracking.php") 

?>

<br>

<div class="container">
	<div class="modal-body" id="adminLogin">
		<div class="row">
			<div class="col-xs-6">
				<div class="well">
                    <form method="post" action="product_insert.php">
                      <div class="form-group">
                          <label for="username" class="control-label">Product name</label>
                          <input type="text" class="form-control" name="product_name" required=""> 
                          <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <label for="description" class="control-label">Description</label>
                          <input type="text" class="form-control" name="product_description" required="">
                          <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <label for="category" class="control-label">Category</label>
                          <input type="text" class="form-control" name="product_category" required="">
                          <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <label for="sku" class="control-label">Sku</label>
                          <input type="text" class="form-control" name="product_sku" required="">
                          <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <label for="stock" class="control-label">Stock</label>
                          <input type="text" class="form-control" name="product_stock" required="">
                          <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <label for="cost" class="control-label">Cost</label>
                          <input type="text" class="form-control" name="product_cost" required="">
                          <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <label for="price" class="control-label">Price</label>
                          <input type="text" class="form-control" name="product_price" required="">
                          <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <label for="sale" class="control-label">Sale</label>
                          <input type="text" class="form-control" name="product_sale" required="">
                          <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <label for="image" class="control-label">Image</label>
                          <input type="text" class="form-control" name="product_img_url" required="">
                          <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                          <label for="reviews" class="control-label">Reviews</label>
                          <input type="text" class="form-control" name="product_star_url" required="">
                          <span class="help-block"></span>
                      </div>
                      <input type="submit" class="btn btn-success btn-block" name="submit" value="submit" />
                    </form>
           		</div><!--END WELL-->
			</div><!--END COL-->                     
		</div><!--END ROW-->
	</div><!--END LOGIN BODY-->
</div><!--END CONTAINER-->

<?php

if(isset($_POST['submit'])) {
										
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
	
	
	$connection = mysql_connect("localhost" , "dig4530c_012" , "knights123!");  
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}
	
	mysql_select_db("dig4530c_012" , $connection);
	
	//Insert data into tables
	
	$sql = "
	INSERT INTO  products (product_name,
	product_description,product_category,
	product_sku,product_stock,product_cost,
	product_price,product_sale,
	product_img_url,product_star_url) VALUES ('$product_name',
	'$product_description',
	'$product_category',
	'$product_sku',
	'$product_stock',
	'$product_cost',
	'$product_price',
	'$product_sale',
	'$product_image',
	'$product_star')"; 
	
	mysql_query($sql, $connection); //(query variable , connection variable)
	
	echo "working?";
	
	
} 
		 
else {
	
	echo "error!";
	
}
	
	 ?>