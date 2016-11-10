<!DOCTYPE html>

<!--UPDATE FUNCTIONALITY NOT 100% EDIT BUTTONS AND INFO RETRIEVAL CURRENTLY WORKING. UPDATING PRODUCTS COMING-->

<?php

include("includes/connectDB.php");
 
 if(isset($_GET['product_edit'])){
	
	$get_id = $_GET['product_edit'];
	
	$get_product = "select * from products where product_id = '$get_id'";
	
									$run_product = mysqli_query($connection, $get_product);
									
									$i = 0;
								  
								  	$row_product=mysqli_fetch_array($run_product);
									
									$product_id = $row_product['product_id'];
									$product_title = $row_product['product_name'];
									$product_image = $row_product['product_img_url'];
									$product_price = $row_product['product_price'];
									
 						}

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Luminositech Client â€“ Collin Davis</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include 'includes/header.php';

 include_once("includes/analytics_tracking.php");
	 
 
  ?>
    <!--Google Analytics-->

<br>

<div class="container">
    
    <div class="modal-body" id="productEdit">
                              <div class="row">
                                  <div class="col-xs-6">
                                  
                                  <h2>edit and update</h2>
                                  
                                      <div class="well">
                                          <form method="post" action="product_insert.php">
                                              <div class="form-group">
                                                  <label for="username" class="control-label">Product name</label>
                                                  <input type="text" class="form-control" name="product_name" value="<?php echo $product_title; ?>"/> 
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="description" class="control-label">Description</label>
                                                  <input type="text" class="form-control" name="product_description" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="category" class="control-label">Category</label>
                                                  <input type="text" class="form-control" name="product_category" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="sku" class="control-label">Sku</label>
                                                  <input type="text" class="form-control" name="product_sku" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="stock" class="control-label">Stock</label>
                                                  <input type="text" class="form-control" name="product_stock" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="cost" class="control-label">Cost</label>
                                                  <input type="text" class="form-control" name="product_cost" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="price" class="control-label">Price</label>
                                                  <input type="text" class="form-control" name="product_price" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="sale" class="control-label">Sale</label>
                                                  <input type="text" class="form-control" name="product_sale" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="image" class="control-label">Image</label>
                                                  <input type="text" class="form-control" name="product_img_url" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="reviews" class="control-label">Reviews</label>
                                                  <input type="text" class="form-control" name="product_star_url" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              
                                              
                                              
                                              <input type="submit" class="btn btn-success btn-block" name="submit" value="submit" />
                                             
                                          </form>
                                      </div>
                                  </div>
                                  
            				</div><!--END ROW-->
        				</div><!--END LOGIN BODY--> 
                    
                    </div>
                    
                    

     <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Luminositech 2016 - This site is not official and is an assignment for a UCF Digital Media course</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="includes/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="includes/js/bootstrap.min.js"></script>
    
     <!-- Bootstrap Core JavaScript -->
    <script src="includes/js/script.js"></script>

</body>

</html>

<?php

if(isset($_GET[product_edit])){

	$get_id = $_GET['product_edit'];
	
	$get_product = "select * from products where product_id='$get_id'";
	
	$run_product = mysqli_query($connect, $get_product);
	
	$i = 0;
	
	$row_product = mysql_fetch_array($run_product);
	
	$product_name = $_POST['product_name'];
	
}



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
										
										
										$connection = mysql_connect("localhost" , "dig4530c_012" , "knights123!");  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect. 
										if ($connection->connect_error) {
											die("Connection failed: " . $connection->connect_error);
										} 
										echo "Connected successfully";
										
										
										mysql_select_db("dig4530c_012" , $connection);
										
										$sql = "
										INSERT INTO  products (product_name,product_description,product_category,product_sku,product_stock,product_cost,product_price,product_sale,product_img_url,product_star_url) VALUES ('$product_name','$product_description','$product_category','$product_sku','$product_stock','$product_cost','$product_price','$product_sale','$product_image','$product_star')"; //Inserts data into the db, users table. Values correspond to fields
										
										mysql_query($sql, $connection); //(query variable , connection variable)
										
										echo "working?";
										
										
											 } //END THING
											 
										else {
											
											echo "error!";
											
											}
										
										 ?>
