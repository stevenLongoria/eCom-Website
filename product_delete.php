<?php

include("includes/connectDB.php");

if(isset($_GET['product_delete'])){
	
	$delete_id = $_GET['product_delete'];
	
	$product_delete = "delete from products where product_id='$delete_id'";
	
	$run_delete = mysqli_query($connection, $product_delete);
	
	if($run_delete){
	
	echo "<script>alert('a product has been deleted!')</script>";
	echo "<script>window.open('admin_panel.php?product_view','_self')</script>";
		
	}

}

?>