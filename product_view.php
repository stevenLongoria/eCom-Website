<!DOCTYPE html>
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

?>

<?php include_once("includes/analytics_tracking.php") ?>
    <!--Google Analytics-->

<br>

<div class="container">
    
    <div class="modal-body" id="productEdit">
                        	
                            <div class="row">
                                  
                                  <table>
                                  <tr>
                                      <th>Sku</th>
                                      <th>Title</th>
                                      <th>Image</th>
                                      <th>Price</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                  </tr>
                                  
                                  <? 
								  
								  include('includes/connectDB.php');
								  
									$get_product = "select * from products";
	
									$run_product = mysqli_query($connection, $get_product);
									
									$i = 0;
								  
								  	while ($row_product=mysqli_fetch_array($run_product)){
									
									$product_id = $row_product['product_id'];
									$product_title = $row_product['product_name'];
									$product_image = $row_product['product_img_url'];
									$product_price = $row_product['product_price'];
									$i++;
								  
								  ?>
                                  
                                  <tr>
                                  	<td><?php echo $i; ?></td>
                                    <td><?php echo $product_title; ?></td>
                                    <td><img src="<?php echo $product_image; ?>" width="60" height="60" /></td>
                                    <td><?php echo $product_price; ?></td>
                                    <td><a href="admin_panel.php?product_edit=<?php echo $product_id; ?>">Edit</a></td>
                                    <td><a href="admin_panel.php?product_delete=<?php echo $product_id; ?>">Delete</a></td>
                                  </tr>
                                  
                                  <?php } ?>
                                  
                                  </table>
                                  
            				</div><!--END ROW-->
        				
                        </div><!--END LOGIN BODY--> 
                    
</div> <!--end container-->
                    
                    

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