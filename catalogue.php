<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Luminositech | Catalogue</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
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

<!-- Page Content -->

<?php include_once("includes/analytics_tracking.php") ?>

<?php
	$username = "dig4530c_012";
	$password = "knights123!";

	$connection = mysql_connect("localhost" , "$username" , "$password");  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect. 
	mysql_select_db("dig4530c_012" , $connection);
	
		//-query  the database table 
		$sql="SELECT * FROM products"; 
		$row = mysql_query("$sql"); 
?>
    <!--Google Analytics-->
    
    <div class="container">
    
   

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products
                    <small>All Products</small>
                </h1>
				<?php 
							for($i=0; $i<3; $i++){
								echo("<article class='row'>");
								while($result = mysql_fetch_assoc($row)){
									echo("<article class='col-md-4 portfolio-item'>");
										echo("<a href='#'><img class='img-responsive' src='".$result['product_img_url']."' alt='no result found'/></a>");
										echo("<h3>");
											echo("<a href='#'>".$result['product_name']."</a>");
										echo("</h3>");
										echo("<p style='font-size:14px'>".$result['product_description']."</p>");
									echo("</article>");
								}
								echo("</article>");
							}
					?>
            </div>
        </div>
        <!-- /.row -->

        
        <!-- /.row -->

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
     <!-- Bootstrap Core JavaScript -->
    <script src="js/script.js"></script>

</body>

</html>