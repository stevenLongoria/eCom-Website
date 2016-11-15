<?php

$errors = "";
	
	$skuErr = '<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Enter a valid SKU
				</div><br />';
	$stockErr = '<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Enter a valid stock
				</div><br />';
	$costErr = '<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Enter a valid cost
				</div><br />';
	$priceErr = '<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Enter a valid price
				</div><br />';
	$saleErr = '<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Enter a valid sale price
				</div><br />';

?>

<div class="container">
	<div class="col-lg-7">
		<div class="modal-body" id="adminLogin">
            <div class="well">
                <form method="post" action="">
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
                      <br />
                      <select name="product_category">
                        <option value="Software Suites">Software Suites</option>
                        <option value="Sound Editing">Sound Editing</option>
                        <option value="Video Editing">Video Editing</option>
                        <option value="Photo Editing">Photo Editing</option>
                        <option value="Organization and Management">Organization and Management</option>
                        <option value="Animation">Animation</option>
                        <option value="3D Modeling">3D Modeling</option>
                      </select>
                      <!--<input type="text" class="form-control" name="product_category" required="">-->
                      <span class="help-block"></span>
                  </div>
                  <div class="form-group">
                      <label for="sku" class="control-label">Sku</label>
                      <input type="text" class="form-control" name="product_sku" maxlength="7" required="">
                      <span class="help-block" id="skuAlert"></span>
                  </div>
                  <div class="form-group">
                      <label for="stock" class="control-label">Stock</label>
                      <input type="text" class="form-control" name="product_stock" maxlength="3" required="">
                      <span class="help-block" id="stockAlert"></span>
                  </div>
                  <div class="form-group">
                      <label for="cost" class="control-label">Cost</label>
                      <input type="text" class="form-control" name="product_cost" required="">
                      <span class="help-block" id="costAlert"></span>
                  </div>
                  <div class="form-group">
                      <label for="price" class="control-label">Price</label>
                      <input type="text" class="form-control" name="product_price" required="">
                      <span class="help-block" id="priceAlert"></span>
                  </div>
                  <div class="form-group">
                      <label for="sale" class="control-label">Sale</label>
                      <input type="text" class="form-control" name="product_sale" required="">
                      <span class="help-block" id="saleAlert"></span>
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
	</div><!--END LOGIN BODY-->
</div><!--END CONTAINER-->

<?php

if(!empty($_POST)){

	if (!preg_match("/[0-9]/", $_POST['product_sku'])) { 
	
	$errors .= $skuErr;
	
	echo '<div id="skuAlert">'.$skuErr.'</div>';	
	
	 }
	 
	if (!preg_match("/[0-9]/", $_POST['product_stock'])) { 
	
	$errors .= $stockErr;
	
	echo '<div id="stockAlert">'.$stockErr.'</div>';	
	
	}
	
	if (!preg_match("/^([1-9][0-9]*|0)(\.[0-9]{2})?$/", $_POST['product_cost'])) { 
	
	$errors .= $costErr;
	
	echo '<div id="costAlert">'.$costErr.'</div>';	
	
	}
	
	if (!preg_match("/^([1-9][0-9]*|0)(\.[0-9]{2})?$/", $_POST['product_price'])) { 
	
	$errors .= $priceErr;
	
	echo '<div id="priceAlert">'.$priceErr.'</div>';	
	
	}
	
	if (!preg_match("/^([1-9][0-9]*|0)(\.[0-9]{2})?$/", $_POST['product_sale'])) { 
	
	$errors .= $saleErr;
	
	echo '<div id="saleAlert">'.$saleErr.'</div>';	
	
	}
	
}

if((isset($_POST['submit'])) && $errors == "" && !empty($_POST)) {
										
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
	
	echo "<script>alert('a product has been added!')</script>";
	echo "<script>window.open('admin_panel.php?product_view','_self')</script>";
			
} else {
	
	 /*echo "<script>alert('form failed to send')</script>";*/

}
	
	 ?>