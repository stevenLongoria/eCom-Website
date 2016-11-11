<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Luminositech Admin – Collin Davis</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>

<?php 

include 'includes/header.php';

?>

<div class="container">

    <div class="row col-lg-12">
    
    <a href="admin_panel.php?product_insert">Insert Products</a>
    <a href="admin_panel.php?product_delete">Delete Products</a>
    <a href="admin_panel.php?product_view">View Orders</a>
    
    </div><!--END ROW TOP-->
    
<div class="row col-lg-12">

<?php 

if(isset($_GET['product_insert'])){

	include("product_insert.php");

}
	
if(isset($_GET['product_view'])){

	include("product_view.php");

}

if(isset($_GET['product_edit'])){

	include("product_edit.php");
	
}
	
    ?>
    
    </div> <!-- END ROW BOTTOM-->
    
</div><!--END CONTAINER-->

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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
     <!-- Bootstrap Core JavaScript -->
    <script src="js/script.js"></script>

</body>

</html>
