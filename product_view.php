<?php include 'includes/header.php';

?>

<?php include_once("includes/analytics_tracking.php") ?>
    <!--Google Analytics-->


<div class="container">
    
   <div class="modal-body" id="productView">
                        	
                            <div class="row">
                                  
                                  <table class="table-bordered col-lg-12">
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
                    
                    

 